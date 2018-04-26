<template>
                        <li class="notification active">
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object">
                                        <img src="https://static.comicvine.com/uploads/original/14/145290/3252787-untitled-1.jpg" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <strong class="notification-title">{{message.title}}</strong>
                                    <p class="notification-desc">{{message.body}}</p>
                                    <div class="notification-meta">
                                        <small class="timestamp"><a href="">Go to Chat</a></small>
                                        <small class="timestamp pull-right">2018-12-12 10:29:31</small>
                                    </div>
                                </div>
                            </div>
                        </li>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:['message']
    }
</script>
