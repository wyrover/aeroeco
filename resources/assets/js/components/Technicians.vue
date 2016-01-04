<template>
    <div class="team__panel" v-for="cat in teams">
        <div class="team__cat">
            <i class="fa fa-caret-right" v-show="!cat.show"></i>
            <i class="fa fa-caret-down" v-show="cat.show"></i>
            <span class="title" @click="cat.show = ! cat.show">
                {{cat.team_name}} ({{cat.members.length}})
            </span>
            <span class="counter pull-right">
                Leader: {{cat.leader.firstname}}&nbsp;{{cat.leader.lastname}}
            </span>
        </div>
        <div class="team__table" v-show="cat.show">
            <table class="table table-striped table-condensed">
                <tr>
                    <th style="width:40%;">Name</th>
                    <th style="width:30%;">Title</th>
                    <th style="width:30%;">Phone</th>
                </tr>
                <tr v-for="item in cat.members|orderBy 'lastname'">
                    <td style="vertical-align: middle;">
                        {{item.firstname|capitalize}}&nbsp;{{item.lastname|capitalize}}
                    </td>
                    <td style="vertical-align: middle;">
                        {{item.title|capitalize}}
                    </td>
                    <td>
                        {{item.phone|phone}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <pre style="display:none;">{{teams|json}}</pre>
</template>
<style lang="stylus">
    .team__panel {
        margin: 10px 20px;

    .team__cat {
        margin: 0 0 5px -20px;
        padding: 10px 15px;
        background-color: rgb(59,59,59);
        border-color: #ddd;
        border-radius: 4px;
        box-shadow: 3px 3px 5px 0px #777;

    > .fa {
          color: #FFFFFF;
          font-weight: bold;
          font-size: 16px;
      }
    > .title, .slectr, .counter {
          color: #FFFFFF;
          cursor: pointer;
          font-weight: bold;
          font-size: 16px;
      }
    }

    .readySell {
        border-left: 8px solid rgb(141,198,63);
    }
    .holdSell {
        border-left: 8px solid rgb(194,194,194);
    }
    }
</style>
<script type="text/babel">
    export default {
        props: [],
        data() {
            return {
                teams: [],
                techs: [],
                show: false
            };
        },
        computed: {},
        created: function() {
            this.fetchTeamsList();
            this.fetchTechsList();
        },
        methods: {
            fetchTeamsList: function() {
                var path = '/api/teams';
                this.$http.get(path, function(teams) {
                    _.each(teams, function(team) {
                        team.show = false;
                    });
                    this.teams = teams;
                }.bind(this));
            },
            fetchTechsList: function() {
                var path = '/api/techs';
                this.$http.get(path, function(techs) {
                    this.techs = techs;
                }.bind(this));
            }
        }
    };
</script>