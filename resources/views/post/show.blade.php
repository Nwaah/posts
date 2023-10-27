<div class="posts-container">
    <x-post :post="$post"/>
</div>
<style>
    .username{
        color: darkgreen;
        padding-bottom: 20px;
    }
    .post{
        background-color: darkgrey;
        border: 3px solid black;
        padding: 3px;
        margin: 6px;
    }
    .post-id{
        /* float: right; */
    }
    .posts-container{
        margin: auto;
        max-width: 40%;
        padding: 5px;
        word-wrap: break-word;
    }
</style>
