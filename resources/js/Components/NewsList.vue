<template>
    <NewsCardAsync v-for="news in newslist" v-bind:key="news.id" :news= "news"/>
</template>

<script>
import axios from 'axios';
import {defineAsyncComponent, ref} from 'vue';

import ErrorNewsCard from './ErrorNewsCard.vue';
import LoadingNewsCard from './LoadingNewsCard.vue';

const NewsCardAsync = defineAsyncComponent({
    loader: ()=> import('./NewsCard.vue'  ),
    loadingComponent: LoadingNewsCard,
    delay:200,
    errorComponent: ErrorNewsCard,
    timeout: 3000,
    suspensible: false
} )

    export default{
        components:{
    NewsCardAsync,
    LoadingNewsCard
},
        async setup(){
            const newslist = ref(null);
            const response = await axios.get("api/news");
            newslist.value = response.data.data;

            return {
                newslist
            }
        }
        
    }
</script>



