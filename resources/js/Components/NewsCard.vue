<template>
    <div class="news-card block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"> 
            <div class="news-title">
                <div class="profile-image">
                    <img v-bind:src="news.profile_image"/>
                    <h3> {{ news.written_by }}</h3>
                    <p> {{ news.date }}</p>
                </div>
                <div class="title">
                    <span> {{ news.title }} </span>
                </div>
            </div>

            <div class="news-info">
                
                <img @error="imageLoadOnError" v-bind:src="news.image_url"  />
                <p class="mx-auto text-base font-medium leading-relaxed">
                    {{ news.text }}
                </p>
                <button type="button" v-bind:href="news.title_link" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Read More</button>
            </div>
            
    </div>
</template>

<script>
export default{
    props: {
        news: Object    
    },
    methods:{
        imageLoadOnError(e) {
          e.target.src = "https://via.placeholder.com/800"
        }
    }
}
</script>

<style scoped>
    .news-card{
        width: 100%;
        max-width: 1000px;
        min-height: 300px;
        background: white;
        margin: 20px auto;
        padding: 30px;
        box-sizing: border-box;
        overflow: hidden;
        border-radius: 20px;
    }

    .profile-image{
        width: 10%;
        max-height: 120px;
        max-width: 100px;
        float: left;
    }

    .empty-image{
        width: 60px;
        height: auto;
        padding-top: 60px;
        border-radius: 50%;
        background-color: #eee;
        margin: 0 auto;
    }
    .news-title {
        width: 100%;
        float: left;
    }

    .title {
        width: 88%;
        float: right;
    }

    .title span {
        color: #222;
        font-size: 1.5em;
        min-height: 100px;
    }

    .profile-image p {
        color: rgb(123, 126, 131);
        font-size: 0.7em;
        margin-bottom: 10px;
    }

    .profile-image img{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 1px solid #b4b3b5;
        padding:2px;
        margin: 0 auto;
    }

    .profile-image h3{
        color: #222;
        font-size: 0.9em;
        text-align: center;
    }

    .news-info {
        width: 100%;
    }

    

    .news-info img {
        width: 100%;
        max-height: 400px;
        height: auto;
        border-radius: 10px;
        padding:5px;
    }

    .news-info p{
        line-height: 140%;
        color: #777;
        margin-top: 20px;
    }

    button{
        margin-top: 10px;
    }
</style>
