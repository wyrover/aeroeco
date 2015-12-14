<template>
    <a class="btn dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope"></i>
        <span class="count" v-show="list.length > 0">
            {{list.length}}
        </span>
    </a>
    <ul class="dropdown-menu notifications-list messages-list">
        <li class="pointer">
            <div class="pointer-inner">
                <div class="arrow"></div>
            </div>
        </li>
        <ul class="list-group">
            <li class="item-header">
                You have {{list.length}} new messages
            </li>
            <li class="list-group-item" v-for="msg in list">
                <span class="avatar">
                    <img src="http://www.gravatar.com/avatar/{{msg.gravatar}}" alt="Gravatar" style="height: 40px; width: auto;"/>
                </span>
                <span class="content">
                    <span class="content-headline">
                        {{msg.sender}}
                        <span class="pull-right">
                            <i class="btnReply fa fa-reply"></i>
                            <i class="btnArchive fa fa-trash"></i>
                        </span>
                    </span>
                    <span class="content-text">
                        {{ msg.brief }}
                    </span>
                </span>
            </li>
        </ul>
        <li class="item-footer">
            <a href="/messages">View all messages</a>
        </li>
    </ul>
</template>
<style lang="stylus">
    .list-group {
        li.list-group-item {
            .avatar {
                position: absolute;
                margin-top: 10px;
            }
            .content {
                display: block;
                padding-left: 50px;
                padding-top: 5px;

                .content-headline {
                    color: #333333;
                    display: block;
                    font-weight: 600;
                }
                .content-text {
                    color: #605F5F;
                    font-size: 0.9em;
                    font-weight: normal;
                }
            }
        }
    }
    .btnReply {
        cursor: pointer;
        color: #75a651;
    }
    .btnArchive {
        cursor: pointer;
        color: #e84e40;
    }
</style>
<script type="text/babel">
    export default {
        props: [],
        data() {
            return {
                list: []
            };
        },
        computed: {},
        created: function() {
            this.fetchMessagesList();
        },
        methods: {
            fetchMessagesList: function() {
                this.$http.get('/api/messages', function(msgs) {
                    this.list = msgs;
                }.bind(this));
            },
            deleteMessage: function(msg) {
                if(confirm("Are you sure you want to delete this message?")) {
                    this.$http.delete('/api/messages/' + msg.id, function (data, status, request) {
                        console.log('Success');
                    }).error(function (data, status, request) {
                        console.log(data);
                    }.bind(this));
                    this.list.$remove(msg);
                }
            }
        }
    };
</script>