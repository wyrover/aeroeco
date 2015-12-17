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
                    <th style="width:15%">Project</th>
                    <th style="width:25%">Status</th>
                    <th style="width:20%">Parts Currently in Market</th>
                    <th style="width:25%">Work Progress</th>
                    <th style="width:15%">Estimated Income Potential</th>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="naked_link">B777-123</a>
                    </td>
                    <td>Disassembly In Progress</td>
                    <td class="text-center">144 of 200</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-adc" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 72%;">
                                72%
                            </div>
                        </div>
                    </td>
                    <td class="text-right">$15,000,000</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="naked_link">B777-234</a>
                    </td>
                    <td>Disassembly In Progress</td>
                    <td class="text-center">120 of 300</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-adc" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 40%;">
                                40%
                            </div>
                        </div>
                    </td>
                    <td class="text-right">$600,000</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="naked_link">B747-345</a>
                    </td>
                    <td>Pending Disassembly</td>
                    <td class="text-center"> - </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-adc" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
                                0%
                            </div>
                        </div>
                    </td>
                    <td class="text-right">$0</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="naked_link">B747-456</a>
                    </td>
                    <td>Awaiting Arrival</td>
                    <td class="text-center"> - </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-adc" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
                                0%
                            </div>
                        </div>
                    </td>
                    <td class="text-right">$0</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="naked_link">B747-567</a>
                    </td>
                    <td>Profile Incomplete</td>
                    <td class="text-center"> - </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-adc" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
                                0%
                            </div>
                        </div>
                    </td>
                    <td class="text-right">$0</td>
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
        props: [],
        data() {
            return {

            };
        },
        computed: {}
    };
</script>