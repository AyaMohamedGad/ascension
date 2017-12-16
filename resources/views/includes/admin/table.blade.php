@if(isset($header))
    <div class="col-md-10">
        <div class="page-header">
            <h1><i class="{{$header->icon}}"></i> {{$header->name}} </h1>
        </div>
    </div>

    @if(isset($header->actions))
        @foreach ($header->actions as $action)
            <div class="col-md-2 top_button">
                <a class="btn btn-white btn-info btn-lg btn-bold" href="{{ $action->link }}">
                    <i class="{{$action->icon}}"></i> {{$action->name}}
                </a>
            </div>
        @endforeach
    @endif
@endif

@if(count($table->data) > 0)
    <div class="col-md-12">
        <div class="btn-group" style="margin: 0 auto;width: inherit;">
            @if(isset($languages))
                @foreach ($languages as $key => $language)
                    <button class="btn btn btn-light" onclick="filter('{{$key}}')" style="margin: 1px">
                        {{ $language }}
                    </button>
                @endforeach
            @endif
        </div>
    </div>
    <div id="modal_div"></div>
    <div class="col-md-12">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                @foreach($table->columns as $column)
                    @if($column->search)
                        <td id="search_column_{{$loop->index}}"></td>
                    @else
                        <th id="search_column_{{$loop->index}}"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                @foreach($table->columns as $column)
                    <th>
                        {{ $column->displayName }}
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($table->data as $row)
                <tr>
                    @foreach($table->columns as $column)
                        @if($column->name == 'actions')
                            <td> @include('includes.admin.actions', ['actions' => $actions, 'row' => $row]) </td>
                        @elseif($column->lang == 'all')
                            <td> {!! $row[$column->name] !!} </td>
                        @else
                            <td>
                                @foreach($row->translations as $translation)
                                    @if($column->lang == $translation->language)
                                        {!! $translation[$column->name] !!}
                                    @endif
                                @endforeach
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="col-sm-12"><div class="alert alert-warning center">There are no data to show...</div></div>
@endif

@section('scripts')
    <script type="text/javascript">
        function jsonCorrection(text) {
            return text.replace(/&quot;/g, '\"');
        }

        var columns = JSON.parse(jsonCorrection('{{$table->columns->toJson()}}'));
        $('#dynamic-table thead td').each( function () {
            var title = $(this).text();
            $(this).html('<input type="text" style="width:80%;height:28px;"/>' );
        } );

        var myTable = $('#dynamic-table')
            .DataTable({
                bAutoWidth: false,
                stateSave: true,
            });

        $(document).scroll(function() {
            localStorage.setItem('pagePos' , $(document).scrollTop());
        });

        if (localStorage.getItem('pagePos') !== null) {
            $(document).scrollTop(localStorage.getItem('pagePos'));
        }

        if (localStorage.getItem('language') !== null) {
            filter(localStorage.getItem('language'));
        }
        else{
            filter('en');
        }

        myTable.columns().every( function () {
            var that = this;
            $('#search_column_'+this.index()+' input').on('keyup change', function () {
                if(that.search() !== this.value)
                    that.search( this.value ).draw();
            } );
        } );

        function filter(lang) {
            localStorage.setItem('language', lang);
            console.log(lang);
            for (var i = 0; i < columns.length; i++) {
                if (columns[i].lang != 'all' && columns[i].lang != lang) {
                    myTable.column(i).visible(false);
                } else if (columns[i].lang == lang) {
                    myTable.column(i).visible(true);
                }
            }
        }
    </script>
@stop