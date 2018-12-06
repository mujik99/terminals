

    @extends('layouts.main')

    @section('content')
        <div class="full-height ">

            {{--terminals--}}
            <div class="container terminals">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Branch</th>
                        <th>Manufacturer</th>
                        <th>State</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($terminals as $terminal)
                        <tr>
                            <td><a href="terminal/{{$terminal->id}}">{{ $terminal->code }}</a></td>
                            <td>{{ $terminal->branchName }}</td>
                            <td>{{ $terminal->manufacturer }}</td>
                            <td>{{ $terminal->stateName }}</td>
                            <td><div data-terminalid="{{$terminal->id}}" class="btn btn-danger btn-delete-terminal">delete</div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$terminals->links()}}
            </div>

            <div class="container colleagues">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>Branch



                            <select class="select-branch">

                                @if(isset($filterVal))
                                    @if($filterVal == '0')
                                        <option selected value="0">Все</option>
                                    @else
                                        <option value="0">Все</option>
                                    @endif
                                @endif

                                @foreach ($branches as $branch)
                                        @if($filterVal == $branch->id )
                                            <option selected value="{{$branch->id}}">{{$branch->code}}</option>
                                        @else
                                            <option value="{{$branch->id}}">{{$branch->code}}</option>
                                        @endif

                                @endforeach
                            </select>
                        </th>
                        <th>BranchTerms</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($colleagues as $colleague)
                        @if($colleague->terminalsCount > 0)
                            <tr>
                                <td>{{ $colleague->last_name }} {{ $colleague->name }}</td>
                                <td>{{ $colleague->branchName }}</td>
                                <td>
                                    @foreach ($colleague->branchesTerms as $branch)
                                        @if($branch->terminals->count() > 0)
                                            {{ $branch->code }} - {{$branch->terminals->count()}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>





        </div>

    @endsection