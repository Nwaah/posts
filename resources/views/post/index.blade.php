<div class="posts-container">
    @foreach ($posts as $post)
        <x-post :post="$post"/>
    @endforeach
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
    .own{
        background-color: lightseagreen !important;
        border-style: dashed !important;
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
