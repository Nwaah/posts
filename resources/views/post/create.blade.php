<div>
    <form action="/post/save" method="post">
        @csrf
        <label>Content</label>
        <input type="text" name="content" id="form-content"></textarea>
        <input type="submit"/>
    </form>
</div>
