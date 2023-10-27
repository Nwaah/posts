<div>
    <div class="post"> 
        <div class="username"><b>{{ $post->user_id }}</b></div>
        <div class="content">
            <input id="edit-content" type="textarea" value="{{$post->content}}"></div>
        </div>
        <button title="Save" onclick="save">Save</button>
        <a href="/post"><button title="Cancel"></button></a>
    </div>
</div>
<script type="text/javascript">
    function save(){
        //send ajax
        var content = document.getElementById("edit-content").text();
    }
</script>
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
