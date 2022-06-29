<template>
    <div>
        <section class="news">
            <article v-for="(post, index) in posts.posts" class="news-article" :style="`background-image: url('${post.cover}')`">
                <section class="news-container">
                    <h3>{{ post.title }}</h3>
                    <hr />
                    <p>{{ post.description}}</p>
                </section>
            </article>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'last-news-component',
        props: [
            'data'
        ],
        data () {
            return {
                posts: {
                    type: Array,
                    default: null
                }
            }
        },
        created () {
            this.posts = JSON.parse(this.data);
        }
    }
</script>
