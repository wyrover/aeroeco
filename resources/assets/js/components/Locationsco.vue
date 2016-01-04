<template>
    <div class="row" style="margin-top: 20px;">
        <table class="table table-striped rowed table-condensed disp-sm">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Address2</th>
                <th>Phone</th>
                <th style="width:80px;">&nbsp;</th>
            </tr>
            <tr v-if="list.length" v-for="loc in list">
                <td>
                    <input type="text" class="form-control" name="location" v-model="loc.location" placeholder="Location">
                </td>
                <td>
                    <input type="text" class="form-control" name="address" v-model="loc.address" placeholder="Address">
                </td>
                <td>
                    <input type="text" class="form-control" name="address2" v-model="loc.address2" placeholder="Address2">
                </td>
                <td>
                    <input type="text" class="form-control" name="phone" v-model="loc.phone|phone" placeholder="Main Phone">
                </td>
                <td>
                    <i class="fa fa-floppy-o icon"
                       style="color:#090;"
                       @click="update_location(loc)"
                    ></i>
                    <i class="fa fa-trash icon"
                       style="color:#900;"
                       @click="delete_location(loc)"
                    ></i>
                </td>
            </tr>
            <tr v-if="!list.length">
                <td colspan="5">No locations found.</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-uam" @click.prevent="add_location()">
                <i class="fa fa-plus-circle"></i>&nbsp;
                Add another location
            </button>
        </div>
    </div>
</template>

<style lang="stylus">
    .fa.icon {
        padding-top:10px;
        pointer:cursor;
    }
</style>

<script type="text/babel">
    export default {
        props: ['company'],
        data() {
            return {
                list: []
            };
        },
        computed: {},
        created: function() {
            this.fetchLocationsList();
        },
        methods: {
            fetchLocationsList: function() {
                var path = '/api/companies/' + this.company + '/locationslist';
                this.$http.get(path, function(locations) {
                    _.each(locations, function(i) {
                        i.is_saved = true;
                    });
                    this.list = locations;
                }.bind(this));
            },
            add_location: function() {
                var newloc = {
                    company_id: this.company
                };

                // persist new record
                this.$http.post('/api/locations', newloc)
                    .success(function(rsp) {
                        this.list.push(rsp);
                    })
                    .error(function(error) {
                        console.log(error)
                    });
            },
            update_location: function(loc) {
                this.$http.put('/api/locations/' + loc.id, loc, function (data, status, request) {
                    console.log('Success');
                }).error(function (data, status, request) {
                    console.log(data);
                }.bind(this));
            },
            delete_location: function(loc) {
                if(confirm("Are you sure you want to delete this location?")) {
                    this.$http.delete('/api/locations/' + loc.id, function (data, status, request) {
                        console.log('Success');
                    }).error(function (data, status, request) {
                        console.log(data);
                    }.bind(this));
                    this.list.$remove(loc);
                }
            }
        }
    };
</script>