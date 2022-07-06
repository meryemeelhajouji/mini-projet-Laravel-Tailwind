lr<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cdn.tailwindcss.com"></script>

    <title>List Postes</title>
</head>
{{--  class="flex flex-col justify-between item-center" --}}
<body>
    <main>
            <h1 class =" text-xl font-bold text-center m-3 text-rose-500"> List des contact</h1>
            <div class="flex flex-col justify-between item-center m-4">
                <table > 
                    <thead class="m-3">
                        <tr><th> Title </th>
                            <th> categorie </th>
                            <th> tages </th>
                            <th> author </th>
                            <th> create date </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    @foreach($Poste as $Poste)
                    <tr>
                      
                           <th  class="m-3 text-center">
                               {{ $Poste -> title }} </th>
                             <th>  {{ $Poste -> categorie_id }}</th> 
                             <th>  {{ $Poste -> categorie_id }}</th> 
                             <th> </th> 
                             <th>  {{ $Poste -> users_id }}</th> 
                             <th> {{ $Poste -> status }} </th> 
                    </tr>   
                
                   @endforeach
                    </table>
            </div>
    </main>
  
 
</body>
</html>