<template id="notes-template">
    <h3>All Notifications</h3>
    <ul class="list-group">
        <li class="list-group-item" v-for="note in list">
            {{ note.message }}
            <span class='btnClose'>
                <strong @click="deleteNote(note)">X</strong>
            </span>
        </li>
    </ul>
</template>
<style lang="stylus">
    .list-group{
        width: 500px;

        .list-group-item {
              position: relative;
              .btnClose {
                  position: absolute;
                  right: 0;
                  width: 20px;
                  color: #900;
                  cursor: pointer;
              }
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
                var resource = this.$resource('api/notifications/:id');

                resource.get(function(notes) {
                    this.list = notes;
                }.bind(this));
            },
            deleteNote: function(note) {
                var resource = this.$resource('api/notifications/:id');

                if(confirm("Are you sure you want to delete this event?")) {
                    resource.delete({id: note.id}, function (data, status, request) {
                        console.log('Success');
                    }).error(function (data, status, request) {
                        console.log(data);
                    });
                    this.list.$remove(note);
                }
            }
        }
    };
</script>
