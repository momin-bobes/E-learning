$('#add-attachment').on('click', function () {
    // window.location.herf='sd';
    // print("sssssss");
    console.log("ssssssssssss");
    $('#attachment-row-1').clone().appendTo('#attachments');
});
$("#post-comment-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');

console.log(form.serialize());

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            el = buildComment(data);
            document.getElementById('comments').append(el);
            addEventsToReplyButton('#reply-button-' + data.id);
            buildCommentForm(data);
        },
        fail: function(xhr, textStatus){
            console.log("" + xhr.responseText + "");
        }
    });
});

function addEventsToReplyButton(id)
{
    $(id).on('click', function (e) {
        var id = $(e.target).attr('meta_parent');
        document.getElementById('reply-form-' + id).classList.remove('hide');
        addReplySubmitHandling(id);
    });
}

$(document).ready(function () {
    var session_id = $('meta[name="session_id"]').attr('content');
    var url = 'http://localhost/E-learningProject/E-learning/blog/public/comments/' + session_id;
    $.ajax({
        type: "GET",
        url: url,
        success: function(data)
        {
            data.forEach(function (item) {
                el = buildComment(item);
                document.getElementById('comments').append(el);
                item.replies.forEach(function (reply) {
                    nel = buildComment(reply);
                    document.getElementById('comments').append(nel);
                });
                buildCommentForm(item);
                addEventsToReplyButton('#reply-button-' + item.id);
            }); // show response from the php script.
        },
        fail: function(xhr, textStatus){
            console.log("" + xhr.responseText + "");
        }
    });
});

function buildComment(comment) {
    console.log(comment.user.id);
    console.log(comment.user.email);
    console.log(comment.user.image);

    // build comment container
    var commentSec = createCommentSection(comment);
    // build comment user avatar
    var commentAvtr = createCommentAvatar(comment);
    // build comment body section
    var commentBody = document.createElement("div");
    commentBody.classList.add('media-body');
    // build comment row section
    var commentRow = document.createElement("div");
    commentRow.classList.add('row');
    // build comment meta
    var commentMeta = createCommentMeta(comment);
    // build comment link

    // build comment content
    commentRow.append(commentMeta);
    if(!comment.parent_id) {
        var commentLink = createCommentLink(comment);
        commentRow.append(commentLink);
    }
    var commentContent = document.createTextNode(comment.content);
    commentBody.append(commentRow);
    commentBody.append(commentContent);
    commentSec.append(commentAvtr);
    commentSec.append(commentBody);
    return commentSec;
}

function createCommentSection(comment)
{
    var commentSec = document.createElement("div");
    commentSec.classList.add('margin-content');
    commentSec.classList.add('media');
    if(comment.parent_id) {
        commentSec.classList.add('reply');
    }
    commentSec.setAttribute('id', 'comment-section-' + comment.id);
    return commentSec;
}

function createCommentAvatar(comment)
{
    var commentAvtr = document.createElement("img");
    commentAvtr.classList.add('mr-3');
    commentAvtr.classList.add('rounded-circle');
    commentAvtr.setAttribute('alt', 'User Avatar');
    commentAvtr.setAttribute('src', comment.user.avatr ? comment.user.avatr : 'http://localhost/E-learningProject/E-learning/blog/public/images/profiles/'+comment.user.image);
    return commentAvtr;
}

function createCommentMeta(comment)
{
    var commentMeta = document.createElement("div");
    commentMeta.classList.add('col-8');
    commentMeta.classList.add('d-flex');
    var username = document.createElement("h5");
    var name = document.createTextNode(comment.username + ' ');
    username.append(name);
    var commentAgo = document.createElement("span");
    var ago = document.createTextNode(comment.time);
    commentAgo.append(ago);
    commentMeta.append(username);
    commentMeta.append(commentAgo);
    return commentMeta;
}

function createCommentLink(comment)
{
    var commentLink = document.createElement("div");
    commentLink.classList.add('col-4');
    var Linkcontainer = document.createElement("div");
    Linkcontainer.classList.add('pull-right');
    Linkcontainer.classList.add('reply');
    var LinkButton = document.createElement("button");
    LinkButton.classList.add('btn');
    LinkButton.classList.add('btn-link');
    LinkButton.classList.add('add-reply');
    LinkButton.setAttribute('id', 'reply-button-' + comment.id);
    LinkButton.setAttribute('meta_parent', comment.id);
    var commentSpan = document.createElement("span");
    commentSpan.setAttribute('meta_parent', comment.id);
    var replyIcon = document.createElement("i");
    replyIcon.setAttribute('meta_parent', comment.id);
    replyIcon.classList.add("fa");
    replyIcon.classList.add("fa-reply");
    var replyActivate = document.createTextNode(' reply');
    commentSpan.append(replyIcon);
    commentSpan.append(replyActivate);
    LinkButton.append(commentSpan);
    Linkcontainer.append(LinkButton);
    commentLink.append(Linkcontainer);
    return commentLink;
}

function buildCommentForm(parent)
{
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    var form = document.createElement('form');
    form.setAttribute('method', 'POST');
    form.setAttribute('class', 'reply');
    form.setAttribute('action', 'http://localhost/E-learningProject/E-learning/blog/public/comments');
    var container = document.createElement("div");
    container.classList.add('input-group');
    container.classList.add('mb-3');
    var tokenInput = document.createElement('input');
    tokenInput.setAttribute('name', '_token');
    tokenInput.setAttribute('value', csrf_token);
    tokenInput.setAttribute("hidden", true);
    var contentInput = document.createElement('input');
    contentInput.setAttribute('name', 'content');
    contentInput.setAttribute('type', 'text');
    contentInput.setAttribute('placeholder', 'type a reply...');
    contentInput.classList.add('form-control');
    var practicalInput = document.createElement('input');
    practicalInput.setAttribute('name', 'practical_id');
    practicalInput.setAttribute('value', '3');
    practicalInput.setAttribute('type', 'text');
    practicalInput.setAttribute('hidden', true);
    var parentInput = document.createElement('input');
    parentInput.setAttribute('name', 'parent_id');
    parentInput.setAttribute('value', parent.id);
    parentInput.setAttribute('type', 'text');
    parentInput.setAttribute('hidden', true);
    var buttonContainer = document.createElement('div');
    buttonContainer.classList.add('input-group-append');
    var button = document.createElement("button");
    button.classList.add('btn');
    button.classList.add('btn-primary');
    button.setAttribute('type', 'submit');
    var text = document.createTextNode('reply');
    button.append(text);
    buttonContainer.append(button);
    container.append(tokenInput);
    container.append(contentInput);
    container.append(parentInput);
    container.append(practicalInput);
    container.append(buttonContainer);
    form.append(container);
    form.classList.add('hide');
    var id = 'reply-form-' + parent.id;
    form.setAttribute('id', id);
    insertAfter(form, document.getElementById('comment-section-' + parent.id));
}

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function addReplySubmitHandling(id)
{
    formId = '#reply-form-' + id;
    $(formId).on('submit', function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');


        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                el = buildComment(data);
                insertAfter(el, document.getElementById('reply-form-' + id));
            },
            fail: function(xhr, textStatus){
                console.log("" + xhr.responseText + "");
            }
        });
    });
}
