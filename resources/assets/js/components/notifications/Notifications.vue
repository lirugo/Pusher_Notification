<template>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown dropdown-notifications">
                <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-bell"><i :data-count="count" id="notification_counter" class="notification-icon"></i></i>
                </a>
                <div class="dropdown-container">
                    <div class="dropdown-toolbar">
                        <div class="dropdown-toolbar-actions">
                            <a href="#" v-on:click.prevent="markAllAsRead()">Mark all as read</a>
                        </div>
                        <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">{{count}}</span>)</h3>
                    </div>

                    <ul class="dropdown-menu" id="notifications_list">
                        <!--Message.vue-->
                        <notifications-message v-for="message in messages" :key="message.id" :message="message"></notifications-message>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
         data() {
            return {
                count:0,
                messages: [
                    {
                        title: 'title of notification',
                        body: 'body of notification'
                    },
                    {
                        title: 'title2 of notification',
                        body: 'body2 of notification'
                    }
                ]
            }
        },
        beforeMount() {
            this.count = 2;
        },
        methods:{
             markAllAsRead(){
                this.count = 0;
                this.messages = [];
            }
        }
    }
</script>
