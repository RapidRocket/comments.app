<h1> Comments: </h1>

<hr>

<a href="comments" id="get">Get</a>
<ul id="comments">

</ul>

<script>
    $(document).ready(function () {

        $('#get').click(function (e) {
            e.preventDefault();
            $.get('/comments/{{$post->id}}', function (data) {

                console.log(data); // Output
                //console.log($.parseJSON('{"name":"John"}'));
                //console.log(build_tree(data, '1', null));
                //populateSavedCounties($('#comments'), data);

                /*function populateSavedCounties(select, tree) {

                    var items = [];

                    $.each(data, function (id, option) {

                        items.push('<li>' + option.id + ' ' + option.parent_id+ '</li>');
                        //items.push(option.id);

                    });
                    select.html(items.join(''));

                }*/

            });
        });

    });


</script>

