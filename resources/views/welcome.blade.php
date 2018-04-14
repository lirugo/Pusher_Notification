
@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>

        /*!
         * bootstrap-notifications v1.0.3 (https://skywalkapps.github.io/bootstrap-notifications)
         * Copyright 2017 Martin Staněk
         * Licensed under MIT
         */.dropdown-container{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:200px;max-width:330px;margin:2px 0 0;list-style:none;font-size:14px;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,0.175);box-shadow:0 6px 12px rgba(0,0,0,0.175);background-clip:padding-box}.dropdown-container>.dropdown-menu{position:static;z-index:1000;float:none !important;padding:10px 0;margin:0;border:0;background:transparent;border-radius:0;-webkit-box-shadow:none;box-shadow:none;max-height:330px;overflow-y:auto}.dropdown-container>.dropdown-menu+.dropdown-menu{padding-top:0}.dropdown-menu>li>a{overflow:hidden;white-space:nowrap;word-wrap:normal;text-decoration:none;text-overflow:ellipsis;-o-text-overflow:ellipsis;-webkit-transition:none;-o-transition:none;transition:none}.dropdown-toggle{cursor:pointer}.dropdown-header{white-space:nowrap}.open>.dropdown-container>.dropdown-menu,.open>.dropdown-container{display:block}.dropdown-toolbar{padding-top:6px;padding-left:20px;padding-right:20px;padding-bottom:5px;background-color:#fff;border-bottom:1px solid rgba(0,0,0,0.15);border-radius:4px 4px 0 0}.dropdown-toolbar>.form-group{margin:5px -10px}.dropdown-toolbar .dropdown-toolbar-actions{float:right}.dropdown-toolbar .dropdown-toolbar-title{margin:0;font-size:14px}.dropdown-footer{padding:5px 20px;border-top:1px solid #ccc;border-top:1px solid rgba(0,0,0,0.15);border-radius:0 0 4px 4px}.anchor-block small{display:none}@media (min-width:992px){.anchor-block small{display:block;font-weight:normal;color:#777777}.dropdown-menu>li>a.anchor-block{padding-top:6px;padding-bottom:6px}}@media (min-width:992px){.dropdown.hoverable:hover>ul{display:block}}.dropdown-position-topright{top:auto;right:0;bottom:100%;left:auto;margin-bottom:2px}.dropdown-position-topleft{top:auto;right:auto;bottom:100%;left:0;margin-bottom:2px}.dropdown-position-bottomright{right:0;left:auto}.dropmenu-item-label{white-space:nowrap}.dropmenu-item-content{position:absolute;text-align:right;max-width:60px;right:20px;color:#777777;overflow:hidden;white-space:nowrap;word-wrap:normal;-o-text-overflow:ellipsis;text-overflow:ellipsis}small.dropmenu-item-content{line-height:20px}.dropdown-menu>li>a.dropmenu-item{position:relative;padding-right:66px}.dropdown-submenu .dropmenu-item-content{right:40px}.dropdown-menu>li.dropdown-submenu>a.dropmenu-item{padding-right:86px}.dropdown-inverse .dropdown-menu{background-color:rgba(0,0,0,0.8);border:1px solid rgba(0,0,0,0.9)}.dropdown-inverse .dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#2b2b2b}.dropdown-inverse .dropdown-menu>li>a{color:#cccccc}.dropdown-inverse .dropdown-menu>li>a:hover,.dropdown-inverse .dropdown-menu>li>a:focus{color:#fff;background-color:#262626}.dropdown-inverse .dropdown-menu>.active>a,.dropdown-inverse .dropdown-menu>.active>a:hover,.dropdown-inverse .dropdown-menu>.active>a:focus{color:#fff;background-color:#337ab7}.dropdown-inverse .dropdown-menu>.disabled>a,.dropdown-inverse .dropdown-menu>.disabled>a:hover,.dropdown-inverse .dropdown-menu>.disabled>a:focus{color:#777777}.dropdown-inverse .dropdown-header{color:#777777}.table>thead>tr>th.col-actions{padding-top:0;padding-bottom:0}.table>thead>tr>th.col-actions .dropdown-toggle{color:#777777}.notifications{list-style:none;padding:0}.notification{display:block;padding:9.6px 12px;border-width:0 0 1px 0;border-style:solid;border-color:#eeeeee;background-color:#fff;color:#333333;text-decoration:none}.notification:last-child{border-bottom:0}.notification:hover,.notification.active:hover{background-color:#f9f9f9;border-color:#eeeeee}.notification.active{background-color:#f4f4f4}a.notification:hover{text-decoration:none}.notification-title{font-size:15px;margin-bottom:0}.notification-desc{margin-bottom:0}.notification-meta{color:#777777}.dropdown-notifications>.dropdown-container,.dropdown-notifications>.dropdown-menu{width:450px;max-width:450px}.dropdown-notifications .dropdown-menu{padding:0}.dropdown-notifications .dropdown-toolbar,.dropdown-notifications .dropdown-footer{padding:9.6px 12px}.dropdown-notifications .dropdown-toolbar{background:#fff}.dropdown-notifications .dropdown-footer{background:#eeeeee}.notification-icon{margin-right:6.8775px}.notification-icon:after{position:absolute;content:attr(data-count);margin-left:-6.8775px;margin-top:-6.8775px;padding:0 4px;min-width:13.755px;height:13.755px;line-height:13.755px;background:red;border-radius:10px;color:#fff;text-align:center;vertical-align:middle;font-size:11.004px;font-weight:600;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}.notification .media-body{padding-top:5.6px}.btn-lg .notification-icon:after{margin-left:-8.253px;margin-top:-8.253px;min-width:16.506px;height:16.506px;line-height:16.506px;font-size:13.755px}.btn-xs .notification-icon:after{content:'';margin-left:-4.1265px;margin-top:-2.06325px;min-width:6.25227273px;height:6.25227273px;line-height:6.25227273px;padding:0}.btn-xs .notification-icon{margin-right:3.43875px}
    </style>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Notification</div>
            <div class="panel-body">

                {{--Notification--}}
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-notifications">
                            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                                <i data-count="0" id="notification_counter" class="glyphicon glyphicon-bell notification-icon"></i>
                            </a>
                            <div class="dropdown-container">
                                <div class="dropdown-toolbar">
                                    <div class="dropdown-toolbar-actions">
                                        <a href="#" onclick="markAllAsRead()">Mark all as read</a>
                                    </div>
                                    <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                                </div>
                                <ul class="dropdown-menu" id="notifications_list">
                                </ul>
                                {{--<div class="dropdown-footer text-center">--}}
                                    {{--<a href="#">View All</a>--}}
                                {{--</div>--}}
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/3.1/pusher.min.js"></script>

    <script type="text/javascript">
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('ul.dropdown-menu');
        var description;

        //Action on a link Marl All As Read
        //Set all notifications as read
        var allNotif;
        function markAllAsRead() {
            //Send
            $.ajax({
                type: 'POST',
                url: '/delNotif',
                dataType:'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'data': allNotif.data
                },
                success: function(msg){
                    console.log(msg);
                    document.getElementById('notifications_list').innerHTML="";
                    notificationsCount=0;
                    notificationsWrapper.find('.notif-count').text('0');
                    notificationsCountElem.attr('data-count', '0');
                }
            });

        }
        //Get Notifications from database
        $(function(){
            $.ajax({
                url: '/getNotif',
                type: "GET",
                dataType: 'json',
                success: function(data)
                {
                    allNotif = data;
                    notificationsCount = data.data.length;
                    notificationsCountElem.attr('data-count', notificationsCount);
                    notificationsWrapper.find('.notif-count').text(notificationsCount);
                    for(var i=0; i<data.data.length; i++) {
                        var existingNotifications = notifications.html();
                        if(data.data[i].body != null)
                            description = "<p class=\"notification-desc\">"+data.data[i].body+"</p>";
                        else
                            description = "";
                        var newNotificationHtml = `
                      <li class="notification active">
                          <div class="media">
                            <div class="media-left">
                              <div class="media-object">
                               <img src="https://static.comicvine.com/uploads/original/14/145290/3252787-untitled-1.jpg" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                              </div>
                            </div>
                            <div class="media-body">
                              <strong class="notification-title">`+data.data[i].title+`</strong>
                              `+description+`
                              <div class="notification-meta">
                                <small class="timestamp">`+data.data[i].created_at+`</small>
                              </div>
                            </div>
                          </div>
                      </li>
                    `;
                        notifications.html(newNotificationHtml + existingNotifications);
                    }
                }
            });
        });


        // if (notificationsCount <= 0) {
        //     notificationsWrapper.hide();
        // }

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('c704c07a87b11b822dfb', {
            encrypted: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('status-liked');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('App\\Events\\StatusLiked', function(data) {
            console.log(data);
            var existingNotifications = notifications.html();
            var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.data.notification.title+`</strong>
                  <p class="notification-desc">`+data.data.notification.body+`</p>
                  <div class="notification-meta">
                    <small class="timestamp">`+data.data.notification.created_at+`</small>
                  </div>
                </div>
              </div>
          </li>
        `;
            notifications.html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });


    </script>
@endsection