<template>
    <div class="row" style="width: 90%; margin:20px auto 0 auto;">
        <div class="col-md-4">
            <div class="main-box infographic-box colored aqua-bg" @click="clkBox('aqua', $event)">
                <div class="headline">
                    <span class="title">Basic</span>
                    <br>
                    <span class="cost pull-right">$75,000</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box infographic-box colored rust-bg" @click="clkBox('rust', $event)">
                <div class="headline">
                    <span class="title">Enhanced</span>
                    <br>
                    <span class="cost pull-right">$100,000</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box infographic-box colored purple-bg" @click="clkBox('purple', $event)">
                <div class="headline">
                    <span class="title">Supreme</span>
                    <br>
                    <span class="cost pull-right">$150,000</span>
                </div>
            </div>
        </div>
    </div>
    <div class="ata__panel" v-for="cat in atas">
        <div class="ata__cat">
            <i class="fa fa-caret-right" v-show="!cat.show"></i>
            <i class="fa fa-caret-down" v-show="cat.show"></i>
            <span class="title" @click="cat.show = ! cat.show">
                {{cat.ATA}}
            </span>
            <span class="counter pull-right">
                {{cat.in_project}} of {{cat.ata_total}}
            </span>
        </div>
        <div class="ata__table" v-show="cat.show">
            <table class="table table-striped table-condensed">
                <tr>
                    <th style="width:5%;">Include</th>
                    <th style="width:15%;">Part #</th>
                    <th style="width:55%;">Part</th>
                    <th style="width:25%;">Serial #</th>
                </tr>
                <tr v-for="item in parts|filterBy cat.chapter in 'ATA'">
                    <td :class="{'readySell': cat.can_sell, 'holdSell': !cat.can_sell}" style="vertical-align: middle;>
                        <input type="checkbox" v-model="item.in_project"/>
                    </td>
                    <td style="vertical-align: middle;">
                        {{item.part.base_part_number}}
                    </td>
                    <td style="vertical-align: middle;">
                        {{item.part.description|capitalize}}
                    </td>
                    <td>
                        <input type="text" class="form-control" v-model="item.msn">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>
<style lang="stylus">
    .ata__panel {
        margin: 10px 20px;

        .ata__cat {
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
        props: ['project'],
        data() {
            return {
                atas: [],
                parts: [],
                show: false
            };
        },
        computed: {},
        created: function() {
            this.fetchAtasList();
            this.fetchPartsList();
        },
        methods: {
            fetchAtasList: function() {
                var path = '/api/project/' + this.project + '/atalist';
                this.$http.get(path, function(atas) {
                    _.each(atas, function(ata) {
                        ata.show = false;
                    });
                    this.atas = atas;
                }.bind(this));
            },
            fetchPartsList: function() {
                var path = '/api/project/' + this.project + '/partslist';
                this.$http.get(path, function(parts) {
                    this.parts = parts;
                }.bind(this));
            },
            clkBox: function(msg, event) {
                alert('You clicked the ' + msg + ' box');
            },
            toggleVisible: function(cat) {
                alert(cat.show);
            }
        }
    };
</script>