<template>
    <div>
        <header class="calendar-header">
            <div class="row mt-3">
                <div class="col-md-2">
                    <button class="btn btn-transparent">
                        <i class="fa fa-chevron-left fa-2x"></i>
                    </button>
                </div>
                <div class="col-md-8 text-center">
                    <div class="row">
                        <div class="col-md-12"><h3 class="title">Janeiro</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><h5>2022</h5></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-transparent">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </button>
                </div>
            </div>
        </header>
        <section class="calendar-container">
            <div class="weekdays">
                <div class="weekday">Seg</div>
                <div class="weekday">Ter</div>
                <div class="weekday">Qua</div>
                <div class="weekday">Qui</div>
                <div class="weekday">Sex</div>
                <div class="weekday">Sáb</div>
                <div class="weekday">Dom</div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'calendar-component',
        data () {
            return {

            }
        }
    }
</script>
