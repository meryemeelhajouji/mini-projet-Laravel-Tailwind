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
            <h1 class =" text-xl font-bold text-center m-5 text-rose-500"> List des contact</h1>
            <div class="flex flex-col justify-between item-center m-5">

                <div class=" flex flex-row-reverse m-5">
                <a href="AddPoste" class=" text-center w-52 m-5  bg-blue-500 text-white font-bold py-2 px-4 " > Add New Poste</a> </div>
                <table   class="border-collapse border border-slate-400 "> 
                    <thead class="m-3">
                        <tr><th class="border border-slate-300 ..."> Title </th>
                            <th class="border border-slate-300 ..."> categorie </th>
                            <th class="border border-slate-300 ..."> tages </th>
                            <th class="border border-slate-300 ..."> author </th>
                            <th class="border border-slate-300 ..."> create date </th>
                            <th class="border border-slate-300 ..."> Action </th>
                        </tr>
                    </thead>
                    @foreach($Poste as $Poste)
                    <tr>
                      
                           <th class="border border-slate-300 ...">
                               {{ $Poste -> title }} </th>
                             <th class="border border-slate-300 ...">  {{ $Poste -> categorie_id }}</th> 
                             <th class="border border-slate-300 ...">  {{ $Poste -> categorie_id }}</th> 
                             <th class="border border-slate-300 ..."> </th> 
                             <th class="border border-slate-300 ...">  {{ $Poste -> users_id }}</th> 
                             <th class="border border-slate-300 ..."> {{ $Poste -> status }} </th> 
                    </tr>   
                
                   @endforeach
                    </table>

                  
            </div>
    </main>
  
 
</body>
</html>