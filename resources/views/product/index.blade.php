@section('page-script')
  <script src="{{asset('assets/swal.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>
  <script>
    $(document).ready( function () {
      $('#tblProd').DataTable();
    });
  </script>
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="table-responsive" style="margin:15px">
            <table class="table" id="tblProd" class="hover" style="width:100%">
            <thead>
                <tr>
                    <th >Name</th>
                    <th >Shop Owner</th>
                    <th >Unit</th>                
                    <th >Price</th>
                    <th >Control</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($prods as $prod)
                    <tr>
                        <td>{{$prod->name}}</td>    
                        <td>
                            {{$prod->shop->name}}
                        </td>                    
                        <td>
                           {{$prod->unit->name}}
                        </td>
                        <td>
                               {{$prod->price}}
                        </td>
                        <td>
                            <button class="button"><i class="fas fa-edit">Edit</i>
                           <i class="fas fa-delete">delete</i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>