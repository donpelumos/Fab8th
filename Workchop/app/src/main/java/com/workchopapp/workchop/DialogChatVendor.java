package com.workchopapp.workchop;

import android.app.AlertDialog;
import android.app.Dialog;
import android.app.DialogFragment;
import android.content.Context;
import android.content.DialogInterface;
import android.graphics.Color;
import android.graphics.Typeface;
import android.os.AsyncTask;
import android.os.Bundle;
import android.os.Handler;
import android.os.Looper;
import android.util.Log;
import android.util.TypedValue;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.ScrollView;
import android.widget.Scroller;
import android.widget.TextView;
import android.widget.Toast;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.URI;
import java.net.URL;
import java.net.URLEncoder;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Timer;
import java.util.TimerTask;

/**
 * Created by BALE on 20/07/2016.
 */

public class DialogChatVendor extends DialogFragment {
    ImageView backIcon, replyChat;
    ScrollView chatContainerScroller;
    EditText chatTextBar;
    String userId, vendorId;
    Button reviewButton;
    AlertDialog dialog;
    String userName;
    LinearLayout chatContainer;
    TextView name;
    int pollCounter = 1;
    Timer timer;
    TimerTask timerTask;
    LinearLayout loadingPanel;

    public DialogChatVendor(){

    }
    @Override
    public Dialog onCreateDialog(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        final AlertDialog.Builder builder = new AlertDialog.Builder(getActivity());
        // Get the layout inflater
        final LayoutInflater inflater = getActivity().getLayoutInflater();
        final View view = getActivity().getLayoutInflater().inflate(R.layout.dialog_chat, null);
        builder.setView(view);
        Typeface type = Typeface.createFromAsset(getActivity().getAssets(),"fonts/GOTHIC.TTF");
        backIcon = (ImageView)view.findViewById(R.id.backIcon);
        replyChat = (ImageView)view.findViewById(R.id.replyChatButton);
        chatTextBar = (EditText)view.findViewById(R.id.chatTextBar);
        name = (TextView)view.findViewById(R.id.vendorName);
        loadingPanel = (LinearLayout)view.findViewById(R.id.loadingPanel);
        name.setTypeface(type);
        try {
            userId = getArguments().getString("userId");
            vendorId = getArguments().getString("vendorId");
            userName = getArguments().getString("userName");
        }
        catch (NullPointerException e){
            userId = getActivity().getIntent().getStringExtra("userId");
            vendorId = getActivity().getIntent().getStringExtra("vendorId");
            userName = getActivity().getIntent().getStringExtra("vendorName");
        }
        name.setText(userName);
        backIcon.setOnTouchListener(new ImageHighlighterOnTouchListener(backIcon));
        replyChat.setOnTouchListener(new ImageHighlighterOnTouchListener(replyChat));
        chatContainer = (LinearLayout)view.findViewById(R.id.chatContainer);
        for(int i=0; i<2; i++){
            //chatContainer.addView(setUserChat("This is message sample "+i+" from the user.","date-time",getActivity().getApplicationContext()));
            //chatContainer.addView(setVendorChat("Response sample "+i,"date-time",getActivity().getApplicationContext()));
        }
        replyChat.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                DateFormat dateYear = new SimpleDateFormat("yyyy");
                DateFormat dateMonth = new SimpleDateFormat("MM");
                DateFormat dateDay = new SimpleDateFormat("dd");
                DateFormat dateHour = new SimpleDateFormat("HH");
                DateFormat dateMinute = new SimpleDateFormat("mm");
                DateFormat dateSecond = new SimpleDateFormat("ss");
                Date date = new Date();
                chatContainer.addView(setUserChat(chatTextBar.getText().toString(), dateHour.format(date)+":"+dateMinute.format(date)+
                                " "+dateDay.format(date)+"-"+dateMonth.format(date)+"-"+dateYear.format(date),
                        getActivity().getApplicationContext()));
                new uploadChats(getActivity().getApplicationContext()).execute(userId, vendorId, chatTextBar.getText().toString(),
                        vendorId);
                chatTextBar.setText("");
                chatContainerScroller.post(new Runnable() {
                    @Override
                    public void run() {
                        chatContainerScroller.fullScroll(ScrollView.FOCUS_DOWN);
                    }
                });
            }
        });
        chatContainerScroller = (ScrollView)view.findViewById(R.id.chatContainerScroller);
        chatContainerScroller.post(new Runnable() {
            @Override
            public void run() {
                chatContainerScroller.fullScroll(ScrollView.FOCUS_DOWN);
            }
        });
        new getChats(getActivity().getApplicationContext()).execute(userId,vendorId);
        new pollingClass(getActivity().getApplicationContext()).execute(userId,vendorId);
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                //pollCaller();
            }
        },5000);

        timerTask = new TimerTask() {
            @Override
            public void run() {
                pollCaller();
            }
        };

        timer = new Timer(true);

        timer.scheduleAtFixedRate(timerTask, 0, 3*1000);

        dialog = builder.create();
        backIcon.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                dialog.cancel();
            }
        });
        return dialog;
    }

    @Override
    public void onDismiss(DialogInterface dialog) {
        super.onDismiss(dialog);
        timer.cancel();
    }

    public void pollCaller(){
        //chatContainer.removeAllViews();
        new pollingClass(getActivity().getApplicationContext()).execute(userId,vendorId);
        Log.v("CALLING POLL", "POLL "+pollCounter);
    }


    private class uploadChats extends AsyncTask<String, Void, String> {
        Context context;
        public uploadChats(Context c){
            context = c;
        }

        @Override
        protected String doInBackground(String... params) {
            String dataUrl = "http://workchopapp.com/mobile_app/upload_chats_vendor.php";
            String dataUrlParameters = null;
            String dataUrlParameters2 = null;

            DateFormat dateYear = new SimpleDateFormat("yyyy");
            DateFormat dateMonth = new SimpleDateFormat("MM");
            DateFormat dateDay = new SimpleDateFormat("dd");
            DateFormat dateHour = new SimpleDateFormat("HH");
            DateFormat dateMinute = new SimpleDateFormat("mm");
            DateFormat dateSecond = new SimpleDateFormat("ss");

            Date date = new Date();
            try {
                dataUrlParameters = "user_id="+ URLEncoder.encode(params[0],"UTF-8")
                        +"&vendor_id="+URLEncoder.encode(params[1],"UTF-8")
                        +"&chat="+URLEncoder.encode(params[2],"UTF-8")
                        +"&sender="+URLEncoder.encode(params[3],"UTF-8")
                        +"&date_year="+URLEncoder.encode(dateYear.format(date),"UTF-8")
                        +"&date_month="+URLEncoder.encode(dateMonth.format(date),"UTF-8")
                        +"&date_day="+URLEncoder.encode(dateDay.format(date),"UTF-8")
                        +"&date_hour="+URLEncoder.encode(dateHour.format(date),"UTF-8")
                        +"&date_minute="+URLEncoder.encode(dateMinute.format(date),"UTF-8")
                        +"&date_second="+URLEncoder.encode(dateSecond.format(date),"UTF-8");
                dataUrlParameters2 = "id="+ URLEncoder.encode(userId,"UTF-8");
            }
            catch (UnsupportedEncodingException e) {
                Toast.makeText(context,new String("Exception: "+ e.getCause()+ "\n"+ e.getMessage()), Toast.LENGTH_LONG).show();
            }

            URL url = null;
            HttpURLConnection connection = null;
            try{

                url = new URL(dataUrl+"?"+dataUrlParameters);
                HttpClient client = new DefaultHttpClient();
                HttpGet request = new HttpGet();
                request.setURI(new URI(dataUrl+"?"+dataUrlParameters));
                HttpResponse response = client.execute(request);
                BufferedReader in = new BufferedReader(new InputStreamReader(response.getEntity().getContent()));

                final StringBuffer sb = new StringBuffer("");
                String line="";
                while ((line = in.readLine()) != null) {
                    sb.append(line);
                    break;
                }
                Handler h = new Handler(Looper.getMainLooper());
                h.post(new Runnable() {
                    public void run() {
                        if(sb.toString().equals("done")) {
                            Toast.makeText(context, "Message Sent", Toast.LENGTH_SHORT).show();
                        }
                    }
                });
                in.close();
            }

            catch(Exception e){
                Log.v("ERROR",e.getMessage());
            }
            return null;
        }
    }

    private class pollingClass extends AsyncTask<String, Void, String> {
        Context context;
        public pollingClass(Context c){
            context = c;
        }

        @Override
        protected String doInBackground(final String... params) {
            String dataUrl = "http://workchopapp.com/mobile_app/get_vendor_new_chats.php";
                    String extra = "";
            try {
                extra = "user_id="+ URLEncoder.encode(params[0],"UTF-8")
                        +"&vendor_id="+URLEncoder.encode(params[1],"UTF-8");
                HttpClient client = new DefaultHttpClient();
                HttpGet request = new HttpGet();
                request.setURI(new URI(dataUrl+"?"+extra));
                HttpResponse response = client.execute(request);
                BufferedReader in = new BufferedReader(new InputStreamReader(response.getEntity().getContent()));

                final StringBuffer sb = new StringBuffer("");
                String line = "";
                while ((line = in.readLine()) != null) {
                    //Log.v("reading","line");
                    sb.append(line);
                    break;
                }
                //Log.v("full text",sb.toString());

                Handler h = new Handler(Looper.getMainLooper());
                h.post(new Runnable() {
                    public void run() {
                        //Log.v("full text",sb.toString());
                        if(sb.toString().contains("------")){
                            String [] values = sb.toString().split("------");
                            for(int i=0; i < values.length; i++) {
                                //Log.v("NEW CHAT", values[i]);
                                String [] valuesa = values[i].split("--");
                                String msg = valuesa[0];
                                String date_time = valuesa[1];
                                String sender = valuesa[2];
                                new clearChats(context).execute(params[0],params[1]);
                                chatContainer.addView(setVendorChat(msg, date_time, context));
                                chatContainerScroller.post(new Runnable() {
                                    @Override
                                    public void run() {
                                        chatContainerScroller.fullScroll(ScrollView.FOCUS_DOWN);
                                    }
                                });
                            }
                        }
                    }
                });
            }
            catch(Exception e){
                Log.v("ERROR",e.getMessage());
            }

            return null;
        }
    }

    private class clearChats extends AsyncTask<String, Void, String> {
        Context context;
        public clearChats(Context c){
            context = c;
        }

        @Override
        protected String doInBackground(String... params) {
            String dataUrl2 = "http://workchopapp.com/mobile_app/clear_vendor_notification.php";
            String dataUrlParameters = null;

            try {
                dataUrlParameters = "user_id="+ URLEncoder.encode(params[0],"UTF-8")
                        +"&vendor_id="+URLEncoder.encode(params[1],"UTF-8");
            }
            catch (UnsupportedEncodingException e) {
                Toast.makeText(context,new String("Exception: "+ e.getCause()+ "\n"+ e.getMessage()), Toast.LENGTH_LONG).show();
            }

            URL url = null;
            HttpURLConnection connection = null;
            try{
                HttpClient client2 = new DefaultHttpClient();
                HttpGet request2 = new HttpGet();
                request2.setURI(new URI(dataUrl2+"?"+dataUrlParameters));
                HttpResponse response2 = client2.execute(request2);
                BufferedReader in2 = new BufferedReader(new InputStreamReader(response2.getEntity().getContent()));

                final StringBuffer sb2 = new StringBuffer("");
                String line2="";
                while ((line2 = in2.readLine()) != null) {
                    sb2.append(line2);
                    break;
                }
                Handler h = new Handler(Looper.getMainLooper());
                h.post(new Runnable() {
                    public void run() {
                        Log.v("CHAT CLEARED","CHAT CLEARED");
                    }
                });
            }

            catch(Exception e){
                Log.v("ERROR",e.getMessage());
            }
            return null;
        }
    }


    private class getChats extends AsyncTask<String, Void, String> {
        Context context;
        public getChats(Context c){
            context = c;
        }

        @Override
        protected String doInBackground(String... params) {
            String dataUrl = "http://workchopapp.com/mobile_app/get_vendor_chats.php";
            String dataUrl2 = "http://workchopapp.com/mobile_app/clear_vendor_notification.php";
            String dataUrlParameters = null;
            String dataUrlParameters2 = null;

            try {
                dataUrlParameters = "user_id="+ URLEncoder.encode(params[0],"UTF-8")
                        +"&vendor_id="+URLEncoder.encode(params[1],"UTF-8");
                dataUrlParameters2 = "id="+ URLEncoder.encode(userId,"UTF-8");
            }
            catch (UnsupportedEncodingException e) {
                Toast.makeText(context,new String("Exception: "+ e.getCause()+ "\n"+ e.getMessage()), Toast.LENGTH_LONG).show();
            }

            URL url = null;
            HttpURLConnection connection = null;
            try{

                url = new URL(dataUrl+"?"+dataUrlParameters);
                HttpClient client = new DefaultHttpClient();
                HttpGet request = new HttpGet();
                request.setURI(new URI(dataUrl+"?"+dataUrlParameters));
                HttpResponse response = client.execute(request);
                BufferedReader in = new BufferedReader(new InputStreamReader(response.getEntity().getContent()));

                final StringBuffer sb = new StringBuffer("");
                String line="";
                while ((line = in.readLine()) != null) {
                    sb.append(line);
                    break;
                }

                HttpClient client2 = new DefaultHttpClient();
                HttpGet request2 = new HttpGet();
                request2.setURI(new URI(dataUrl2+"?"+dataUrlParameters));
                HttpResponse response2 = client2.execute(request2);
                BufferedReader in2 = new BufferedReader(new InputStreamReader(response2.getEntity().getContent()));

                final StringBuffer sb2 = new StringBuffer("");
                String line2="";
                while ((line2 = in2.readLine()) != null) {
                    sb2.append(line2);
                    break;
                }

                Handler h = new Handler(Looper.getMainLooper());
                h.post(new Runnable() {
                    public void run() {
                        if(sb.toString().equals("false")){
                            loadingPanel.setVisibility(View.GONE);
                        }
                        else {
                            if(sb.toString().contains("------")) {
                                String[] allChats = sb.toString().split("------");

                                for (int i = 0; i < allChats.length; i++) {
                                    String[] chatRows = allChats[i].split("--");
                                    if (chatRows[2].equals(userId)) {
                                        chatContainer.addView(setVendorChat(chatRows[3], chatRows[4], getActivity().getApplicationContext()));
                                    } else {
                                        chatContainer.addView(setUserChat(chatRows[3], chatRows[4], getActivity().getApplicationContext()));
                                    }
                                    chatContainerScroller.post(new Runnable() {
                                        @Override
                                        public void run() {
                                            chatContainerScroller.fullScroll(ScrollView.FOCUS_DOWN);
                                        }
                                    });
                                }
                                loadingPanel.setVisibility(View.GONE);
                            }
                            else{
                                loadingPanel.setVisibility(View.GONE);
                            }

                        }

                    }
                });
                in.close();
            }

            catch(Exception e){
                Log.v("ERROR",e.getMessage());
            }
            return null;
        }
    }

    public LinearLayout setUserChat(String message, String time, Context context){
        //Typeface type = Typeface.createFromAsset(getAssets(),"fonts/GOTHIC.TTF");
        float density = getResources().getDisplayMetrics().density;
        LinearLayout messageFrame = new LinearLayout(context);
        LinearLayout.LayoutParams messageFrameParams = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT,
                LinearLayout.LayoutParams.WRAP_CONTENT);
        messageFrameParams.gravity = Gravity.RIGHT;
        messageFrameParams.setMargins((int)(40*density),(int)(3*density),(int)(3*density),(int)(6*density));
        messageFrame.setOrientation(LinearLayout.VERTICAL);
        messageFrame.setMinimumWidth((int)(120*density));
        messageFrame.setBackgroundResource(R.drawable.background_rounded_blue);
        messageFrame.setLayoutParams(messageFrameParams);

        TextView chatText = new TextView(context);
        LinearLayout.LayoutParams chatTextParams = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT,
                LinearLayout.LayoutParams.WRAP_CONTENT);
        chatTextParams.setMargins((int)(10*density),(int)(6*density),(int)(10*density),0);
        chatTextParams.gravity = Gravity.LEFT;
        chatText.setLayoutParams(chatTextParams);
        chatText.setTextSize(TypedValue.COMPLEX_UNIT_SP, 14);
        chatText.setTextColor(Color.parseColor("#FFFFFF"));
        chatText.setText(message);

        TextView chatTime = new TextView(context);
        LinearLayout.LayoutParams chatTimeParams = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT,
                LinearLayout.LayoutParams.WRAP_CONTENT);
        chatTimeParams.setMargins((int)(0*density),(int)(0*density),(int)(10*density),(int)(6*density));
        chatTimeParams.gravity = Gravity.RIGHT;
        chatTime.setLayoutParams(chatTimeParams);
        chatTime.setTextSize(TypedValue.COMPLEX_UNIT_SP, 11);
        chatTime.setTextColor(Color.parseColor("#E8E8E8"));
        chatTime.setText(time);

        messageFrame.addView(chatText);
        messageFrame.addView(chatTime);

        return messageFrame;
    }

    public LinearLayout setVendorChat(String message, String time, Context context){
        //Typeface type = Typeface.createFromAsset(getAssets(),"fonts/GOTHIC.TTF");
        float density = getResources().getDisplayMetrics().density;
        LinearLayout messageFrame = new LinearLayout(context);
        LinearLayout.LayoutParams messageFrameParams = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT,
                LinearLayout.LayoutParams.WRAP_CONTENT);
        messageFrameParams.gravity = Gravity.LEFT;
        messageFrameParams.setMargins((int)(3*density),(int)(3*density),(int)(40*density),(int)(6*density));
        messageFrame.setOrientation(LinearLayout.VERTICAL);
        messageFrame.setMinimumWidth((int)(120*density));
        messageFrame.setBackgroundResource(R.drawable.background_rounded_gold);
        messageFrame.setLayoutParams(messageFrameParams);

        TextView chatText = new TextView(context);
        LinearLayout.LayoutParams chatTextParams = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT,
                LinearLayout.LayoutParams.WRAP_CONTENT);
        chatTextParams.setMargins((int)(10*density),(int)(6*density),(int)(10*density),0);
        chatTextParams.gravity = Gravity.LEFT;
        chatText.setLayoutParams(chatTextParams);
        chatText.setTextSize(TypedValue.COMPLEX_UNIT_SP, 14);
        chatText.setTextColor(Color.parseColor("#444444"));
        chatText.setText(message);

        TextView chatTime = new TextView(context);
        LinearLayout.LayoutParams chatTimeParams = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT,
                LinearLayout.LayoutParams.WRAP_CONTENT);
        chatTimeParams.setMargins((int)(10*density),0,0,(int)(6*density));
        chatTimeParams.gravity = Gravity.LEFT;
        chatTime.setLayoutParams(chatTimeParams);
        chatTime.setTextSize(TypedValue.COMPLEX_UNIT_SP, 11);
        chatTime.setTextColor(Color.parseColor("#666666"));
        chatTime.setText(time);

        messageFrame.addView(chatText);
        messageFrame.addView(chatTime);

        return messageFrame;
    }

    private class ImageHighlighterOnTouchListener implements View.OnTouchListener {
        //This
        final ImageView imageButton;

        public ImageHighlighterOnTouchListener(final ImageView imageButton) {
            super();
            this.imageButton = imageButton;
        }

        public boolean onTouch(final View view, final MotionEvent motionEvent) {
            if (motionEvent.getAction() == MotionEvent.ACTION_DOWN) {
                //grey color filter, you can change the color as you like
                imageButton.setAlpha((float)0.5);
            } else if (motionEvent.getAction() == MotionEvent.ACTION_UP) {
                imageButton.setAlpha((float)1.0);
            }
            return false;
        }

    }
}
