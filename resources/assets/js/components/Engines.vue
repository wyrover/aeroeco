<template>
    <table class="table table-striped table-condensed">
        <tr>
            <th style="width:4%;">Pos</th>
            <th style="width:15%;">Engine Type / Variant</th>
            <th style="width:14%;">Engine Serial Number (SSN)</th>
            <th style="width:15%;">Owner</th>
            <th style="width:15%;">Instructions</th>
            <th style="width:15%;">Engine Stands</th>
            <th style="width:10%;">Engine Trace</th>
            <th style="width:12%;">Add-Ons</th>
        </tr>
        <tr v-for="engine in list">
            <td style="vertical-align:middle;">{{engine.position}}</td>
            <td style="vertical-align:middle;">
                <input type="text" class="form-control" v-model="engine.engine_type_variant">
            </td>
            <td style="vertical-align:middle;">
                <input type="text" class="form-control" placeholder="Engine SSN" v-model="engine.engine_msn">
            </td>
            <td style="vertical-align:middle;">
                <input type="text" class="form-control" placeholder="Engine SSN" v-model="engine.owner">
            </td>
            <td style="vertical-align:middle;">
                <select class="form-control" v-model="engine.task">
                    <option>return to owner</option>
                    <option>market</option>
                </select>
            </td>
            <td style="vertical-align:middle;">
                <select class="form-control" v-model="engine.stand_provider">
                    <option value="ADC">ADC</option>
                    <option value="Owner">Owner</option>
                </select>
            </td>
            <td style="vertical-align:middle;">
                <span style="padding:10px 0 0 0;" v-show="!engine.path_engine_trace">
                    <button class="btn btn-uam btn-sm" @click="engine_trace(engine)">Upload File</button>
                </span>
                <span style="padding:10px 0 0 0;" v-show="engine.path_engine_trace">
                    <button class="btn btn-warning btn-sm" @click="engine_trace(engine)">Replace File</button>
                </span>
            </td>
            <td style="vertical-align:middle;">
                <input type="checkbox" v-model="engine.MPA"> MPA
                <br>
                <input type="checkbox" v-model="engine.boroscope"> Boroscope
                <br>
                <input type="checkbox" v-model="engine.storage_program"> Storage
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <a href="#" class="btn btn-default naked_link">
                    <i class="fa fa-plus-circle"></i> Add New Engine
                </a>
            </td>
        </tr>
    </table>
</template>
<style lang="stylus"></style>
<script type="text/babel">
    export default {
        props: ['project'],
        data() {
            return {
                list: []
            };
        },
        computed: {},
        created: function() {
            this.fetchEnginesList();
        },
        methods: {
            fetchEnginesList: function() {
                var path = '/api/project/' + this.project + '/enginelist';
                this.$http.get(path, function(engines) {
                    this.list = engines;
                }.bind(this));
            },
            engine_trace: function(engine) {
                alert('Clicked');
            }
        }
    };
</script>