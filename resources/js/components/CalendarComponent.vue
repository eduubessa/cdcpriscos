<template>
    <div class="row">
        <div class="col-md-8">
            <h4>Agenda</h4>
            <hr/>
            <header class="calendar-header">
                <div class="row mt-5">
                    <div class="col-md-2">
                        <button class="btn btn-transparent">
                            <i class="fa fa-chevron-left fa-2x"></i>
                        </button>
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="row">
                            <div class="col-md-12"><h5>{{ year }}</h5></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"><h3 class="title">{{ month }}</h3></div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
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
                <div class="weekdays-numb">
                    <div v-for="day in monthdays.prev" :key="`weekday-last-month-${day}`" class="weekday-numb weekday-month-prev">{{ day }}</div>
                    <div v-for="day in monthdays.current" :key="`weekday-${day}`" :class="{ 'weekday-numb' : true, 'today': day === current_day.getDate() }">{{ day }}</div>
                    <div v-for="day in monthdays.next" :key="`weekday-next-${day}`" class="weekday-numb weekday-month-next">{{ day }}</div>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <h4>Eventos</h4>
            <hr/>
            <section class="events">
                <div class="row mt-3">
                    <small>{{ weekdays[current_day.getDay()-1] }}, {{ current_day.getDate() }} de {{ months[current_day.getMonth()] }} de {{ current_day.getFullYear() }}</small>
                    <ul class="events-list py-3">
                        <li>
                            <a href="#">
                                <h3>CDC Priscos - SC Braga</h3>
                                <p>18:00h - Bilhetes já há venda nos locais habituais</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3>SL Benfica - CDC Priscos</h3>
                                <p>21:30h - Bilhetes já há venda nos locais habituais</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3>CDC Priscos - SC Braga</h3>
                                <p>18:00h - Bilhetes já há venda nos locais habituais</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3>SL Benfica - CDC Priscos</h3>
                                <p>21:30h - Bilhetes já há venda nos locais habituais</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3>CDC Priscos - SC Braga</h3>
                                <p>18:00h - Bilhetes já há venda nos locais habituais</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3>SL Benfica - CDC Priscos</h3>
                                <p>21:30h - Bilhetes já há venda nos locais habituais</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'calendar-component',
        data () {
            return {
                year: new Date().getFullYear(),
                month: null,
                current_day: new Date(),
                months: [],
                weekdays: [],
                monthdays: {
                    prev: [],
                    current: [],
                    next: []
                },
                weekday: null
            }
        },
        created () {
            let first_month_day = new Date(this.current_day.getFullYear(), this.current_day.getMonth(), 1);
            let last_month_day = new Date(this.current_day.getFullYear(), this.current_day.getMonth() + 1, 0);
            let last_prev_month_day = new Date(this.current_day.getFullYear(), this.current_day.getMonth(), 0);
            this.months = [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ];

            this.weekdays = [
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sáb",
                "Dom"
            ];

            this.month = this.months[this.current_day.getMonth()];
            this.weekday = this.weekdays[first_month_day.getDay()-1];
            let last_days_prev_month = [];
            let a = last_month_day;

            for(let day = 1; day <= last_month_day.getDate(); day++)
                this.monthdays.current.push(day);

            for(let x = 0; x < first_month_day.getDay()-1; x++)
                last_days_prev_month.push(x);

            for(let y = last_prev_month_day.getDate(); y > last_prev_month_day.getDate()-last_days_prev_month.length; y--)
                this.monthdays.prev.push(y);

            for(let k = last_month_day.getDay(); k < this.weekdays.length; k++)
                this.monthdays.next.push(new Date(a.setDate(a.getDate() + 1)).getDate());

        },
        methods: {
            isToday: (date) => {
                let current_date = new Date();
                return current_date === date;

            }
        }
    }
</script>
