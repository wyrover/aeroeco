<template>
    <div class="panel panel-info" style="margin-left:-10px;">
        <header class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-plane"></i>
                Projects
            </h3>
        </header>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
                <tr>
                    <th style="width:20%">Project</th>
                    <th style="width:20%">Status</th>
                    <th style="width:20%">Parts Currently in Market</th>
                    <th style="width:25%">Work Progress</th>
                    <th style="width:15%">Estimated Income Potential</th>
                </tr>
                <tr>
                    <td v-if="list.length == 0"><strong>No Projects Found!</strong></td>
                </tr>
                <tr v-for="p in list" v-if="list.length > 0">
                    <td>
                        <a href="/projects/{{p.id}}/profile" class="naked_link">
                            {{p.aircraft.type.model}}-{{p.aircraft.msn}}-{{p.aircraft.tail}}
                        </a>
                    </td>
                    <td>
                        {{p.status.status}}
                    </td>
                    <td class="text-center">
                        {{p.in_market}} of {{p.total_parts}}
                    </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-adc" role="progressbar" aria-valuenow="{{p.percentage}}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
                                {{p.percentage|percentage 0}}
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        Upgrade Now!
                    </td>
                </tr>
            </table>
            <p>
                <a class="btn btn-uam" href="/projects/profile">
                    <i class="fa fa-plus"></i> Start a new project
                </a>
            </p>
        </div>
    </div>
</template>
<style lang="stylus">
    .panel {
        -webkit-box-shadow: 3px 3px 5px 0px rgba(119,119,119,1);
        -moz-box-shadow: 3px 3px 5px 0px rgba(119,119,119,1);
        box-shadow: 3px 3px 5px 0px rgba(119,119,119,1);
    }
    .progress {
        margin-bottom: 0;
        background-color: #aaa;
    }
    .progress-bar-adc {
        background-color: #F35958;
        color: #fff;
    }
</style>
<script type="text/babel">
    export default {
        props: ['user'],
        data() {
            return {
                list: []
            };
        },
        computed: {},
        created: function() {
            this.fetchProjectsList();
        },
        methods: {
            fetchProjectsList: function() {
                var path = '/api/projects/user/' + this.user + '/projectslist';
                this.$http.get(path, function(projects) {
                    this.list = projects;
                }.bind(this));
            }
        }
    };
</script>