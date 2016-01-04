<template>
    <div class="row" style="width: 90%; margin:20px auto 0 auto;">
        <div class="col-md-4">
            <div class="main-box infographic-box colored aqua-bg" @click="clkBox('1', $event)">
                <div class="headline">
                    <span class="title">{{bundles[0].name}}</span>
                    <br>
                    <span class="describe__bundle">
                        {{bundles[0].description}}
                    </span>
                    <br>
                    <span class="cost pull-right">{{bundles[0].cost|currency}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box infographic-box colored rust-bg" @click="clkBox('2', $event)">
                <div class="headline">
                    <span class="title">{{bundles[1].name}}</span>
                    <br>
                    <span class="describe__bundle">
                        {{bundles[1].description}}
                    </span>
                    <br>
                    <span class="cost pull-right">{{bundles[1].cost|currency}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-box infographic-box colored purple-bg" @click="clkBox('3', $event)">
                <div class="headline">
                    <span class="title">{{bundles[2].name}}</span>
                    <br>
                    <span class="describe__bundle">
                        {{bundles[2].description}}
                    </span>
                    <br>
                    <span class="cost pull-right">{{bundles[2].cost|currency}}</span>
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
                    <td class="text-center" :class="{ readySell: !!item.can_sell, holdSell: !item.can_sell && !!item.in_project }"  style="vertical-align: middle;">
                        <input type="checkbox"
                               id="in_project"
                               name="in_project"
                               v-model="item.in_project"
                               @change="toggleInProject(item, cat)"/>
                    </td>
                    <td style="vertical-align: middle;">
                        {{item.part.base_part_number}}
                    </td>
                    <td style="vertical-align: middle;">
                        {{item.part.description|capitalize}}
                    </td>
                    <td>
                        <input type="text"
                               class="form-control"
                               v-model="item.msn"
                               @change="toggleWithSerial(item)">
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
                bundles: [],
                show: false
            };
        },
        computed: {},
        created: function() {
            this.fetchAtasList();
            this.fetchBundlesList();
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
            fetchBundlesList: function() {
                var path = '/api/project/' + this.project + '/bundleslist';
                this.$http.get(path, function(bundles) {
                    this.bundles = bundles;
                }.bind(this));
            },
            fetchPartsList: function() {
                var path = '/api/project/' + this.project + '/partslist';
                this.$http.get(path, function(parts) {
                    this.parts = parts;
                }.bind(this));
            },
            clkBox: function(lvl, event) {
                var path = '/api/project/' + this.project + '/package/' + lvl;
                this.$http.post(path, function (data, status, request) {
                    console.log('Success');
                }).error(function (data, status, request) {
                    console.log(data);
                }.bind(this));
                location.reload();
            },
            toggleVisible: function(cat) {
                alert(cat.show);
            },
            toggleInProject: function(part, category) {
                this.$http.patch('/api/project/togglepart/' + part.id, function (data, status, request) {
                    if(part.in_project === true) {
                        category.in_project++;
                    } else {
                        category.in_project--;
                    }
                    console.log('Success');
                }).error(function (data, status, request) {
                    console.log(data);
                }.bind(this));
            },
            toggleWithSerial: function(part) {
                if(part.msn.length > 0){
                    part.can_sell = true;
                    part.in_project = true;
                } else {
                    part.can_sell = false;
                }
                this.$http.patch('/api/project/togglemsn', part, function (data, status, request) {
                    console.log('Success');
                }).error(function (data, status, request) {
                    console.log(data);
                }.bind(this));
            }
        }
    };
</script>