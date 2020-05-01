<div class="comments">
    <h2>Comments</h2>

    <?php $args =array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => null,
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'reply_text'        => 'Reply',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 30,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5',
        'short_ping'        => false,
        'echo'              => true
    );
    ?>

    
    <?php wp_list_comments($args, $comments);

    $comments_args = array(
        'label_submit' => 'Send',
        'title_reply' => 'Write a reply or comment',
        'comment_notes_after' => '',
    );
    
    comment_form($comments_args);
    ?>
</div>


<style>
.comment {
    list-style-type: none;
    margin-bottom: 20px;
    padding: 5px;
}
/*.comments h3*/
.comments h2 {
    background: #1d2124;
    color: white;
    padding: 10px;
}
.comment-body {
    border: lightgrey solid 1px;
    padding: 20px 10px;
}
.comment-meta {
    background: white;
    color: black;
    padding: 10px;
}
.comment-meta img {
    float: left;
    margin-right: 10px;
    border: 1px solid black;
    border-radius: 20px;
}
.comment-reply-link {
    background: black;
    color: #fff;
    display: inline-block;
    padding: 5px 10px;
}
.comment-form input,.comment-form textarea {
    font-family: "Times New Roman", serif;
    padding: 10px;
    border: 1px solid black;
    border-radius: 10px;
    margin-left: 40px;
}
@media (max-width: 700px) {
.comment-form input,.comment-form textarea {
    margin-left: 10px;
    margin-right: 10px;
    width: 90%;
}
}

</style>