<template>
    <div class="news-card block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"> 
            <div class="news-title">
                <div class="profile-image">
                    <img/>
                    <h3></h3>
                    <p/>
                </div>
                <div class="title">
                    <span/>
                </div>
            </div>

            <div class="news-info">
                <img />
                <p class="mx-auto text-base font-medium leading-relaxed">
                </p>
                <p class="mx-auto text-base font-medium leading-relaxed">
                </p>
                <p class="mx-auto text-base font-medium leading-relaxed">
                </p>
                <button></button>
            </div>
    </div>
</template>

<script>
export default {
    name: "LoadingNewsCard"
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
    .news-title {
        width: 100%;
        float: left;
    }

    .title {
        width: 88%;
        height: 80px;
        float: right;
    }

    .title span {
        display: block;
        width: 75%;
        height: 36px;
        background-color: #eee;
        padding-bottom: 5px;
    }

    .profile-image p {
        width: 100px;
        height: 15px;
        background-color: #eee;
        margin-bottom: 10px;
    }

    .profile-image img{
        width: 60px;
        height: auto;
        padding-top: 60px;
        border-radius: 50%;
        background-color: #eee;
        margin: 0 auto;
    }
    

    .profile-image h3{
        width: 100px;
        height: 18px;
        background-color: #eee;
        margin-top: 5px;
        margin-bottom: 5px;
    }


    .news-info{
        width: 100%;
    }
    

    .news-info img{
        width: 100%;
        height: auto;
        padding-top: 400px;
        border-radius: 10px;
        background-color: #eee;
    }

    .news-info p{
        width: 95%;
        height: 16px;
        background-color: #eee;
        margin-top: 20px;
    }
</style>
