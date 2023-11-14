@extends('layouts.master')

@section('title', 'Hello world')
@section('content')
    <div class="page-content">
        <div>
            <h1 class="text-container blinking-text animate__animated animate__pulse">Hello World</h1>
            <table>
                <tr>
                    <td class="editable-td">Giá trị 1</td>
                    <td class="editable-td">Giá trị 2</td>
                    <td class="editable-td">Giá trị 3</td>
                </tr>
            </table>

            
        </div>
    </div>
@endsection
@section('css')
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.editable-td').dblclick(function() {
            var originalValue = $(this).text();
            var inputField = $('<input type="text" class="editable-input" value="' + originalValue + '">');
            $(this).html(inputField);
            inputField.focus();

            inputField.blur(function() {
                var newValue = inputField.val();
                $(this).parent().html(newValue);
            });

            inputField.keyup(function(event) {
                if (event.keyCode === 13) { // Bấm Enter
                    var newValue = inputField.val();
                    $(this).parent().html(newValue);
                }
            });
        });
    });
</script>


@endsection
