<template id="notes-template">
    <a class="btn dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell"></i>
        <span class="count" v-show="list.length > 0">
            {{list.length}}
        </span>
    </a>
    <ul class="dropdown-menu notifications-list">
        <li class="pointer">
            <div class="pointer-inner">
                <div class="arrow"></div>
            </div>
        </li>
        <ul class="list-group">
        <li class="list-group-item" v-for="note in list">
            <i class="typeicon fa fa-{{ note.type.icon}}"></i>
            {{ note.message }}
            <span class='btnClose'>
                <i class="delicon fa fa-trash" @click="deleteNote(note)"></i>
            </span>
        </li>
        <li id="notif" class="item-footer">
            <a href="#">Delete All</a>
        </li>
        </ul>
        </li>
    </ul>
</template>
<style lang="stylus">
    .list-group{
        width: 320px;

        .list-group-item {
            position: relative;

            .typeicon {
        color: #e84e40;
        margin-right: 3px;
    }

            .delicon {
        color: #e84e40;
        margin-left: 3px;
    }

            .btnClose {
        position: absolute;
        right: 0;
        width: 20px;
        color: #900;
        cursor: pointer;
    }
        }
    }
    #notif {
        padding: 8px 0;
        text-align: center;
        list-style: none;
        background-color: #8dc63f;
        border-radius: 0 0 4px 4px;
    }
    #notif a {
        color: #ffffff;
        text-decoration: none;

        &:hover {
            padding: 11px;
            color: #8dc63f;
            background-color: #ffffff;
        }
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
            this.fetchNotesList();
        },
        methods: {
            fetchNotesList: function() {
                this.$http.get('/api/notifications', function(notes) {
                    this.list = notes;
                }.bind(this));
            },
            deleteNote: function(note) {
                if(confirm("Are you sure you want to delete this event?")) {
                    this.$http.delete('/api/notifications/' + note.id, function (data, status, request) {
                        console.log('Success');
                    }).error(function (data, status, request) {
                        console.log(data);
                    }.bind(this));
                    this.list.$remove(note);
                }
            }
        }
    };
</script>
