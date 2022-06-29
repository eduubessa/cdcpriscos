<template>
    <section class="slider" v-if="slides.status === 200 && slides.slides.length > 0">
        <div class="container-fluid">
            <div class="row">
                <article class="slide" v-for="(slide, index) in slides.slides" :key="`slider-${index}`">
                    <div class="slide-image" :style="`background-image: url('${slide.cover}')`"></div>
                    <div class="slide-content">
                        <div class="row">
                            <div class="col-md-6 offset-2">
                                <h1>{{ slide.name }}</h1>
                                <p>{{ slide.description }}</p>
                            </div>
                            <div class="col-md-1">
                                <a :href="slide.url" class="btn btn-primary">Ler mais</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: 'slider-component',
    props: [
        'data'
    ],
    data() {
        return {
            slides: {
                type: Object,
                default: null
            }
        }
    },
    created() {
        this.slides = JSON.parse(this.data);
    }
}
</script>
