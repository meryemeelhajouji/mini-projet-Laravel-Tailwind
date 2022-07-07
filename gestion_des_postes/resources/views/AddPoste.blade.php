<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add New Post</title>
</head>
<body>
    <div class="w-full flex flex-col justify-center items-center m-5 ">
        <h1 class="text-center font-bold text-xl m-5"> Add New Poste  </h1>

        <form id="form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
       <div id="step1">
        <h1 class="text-center font-bold text-sm m-2"> Step 1 </h1>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                   Title
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Title">
                
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                     Slug
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-namee" type="text" placeholder="slug">
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    categorie
                  </label>
                  <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Ctegorie">
                    @foreach ($categories as $categorie)
                    <option value= "{{ $categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                </select>
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Tages
                  </label>
                  <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Ctegorie">
                    @foreach ($tages as $tage)
                    <option value= "{{ $tage->id}}">{{$tage->name}}</option>
                    @endforeach
                </select>
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Author
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="author">
                
                </div>
            </div>
            <button type="button" onclick="next()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              suive
              </button>
       </div>

          <div id="step2">
        <h1 class="text-center font-bold text-sm m-2"> Step 2</h1>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full  px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                   Description
                  </label>
                  <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Title">
                  </textarea>
                </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                     image
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-namee" type="file" placeholder="slug">
                </div>
              
                <div class="w-full px-3 ">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                     publish
                  </label>
                  <input class="" id="grid-last-namee" type="radio" name="oui" value="oui" >
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Oui
                   </label>
                   <input class="" id="grid-last-namee" type="radio" name="non" value="non" >
                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                     Non
                    </label>
                </div>
           </div>
                 <div class="flex items-center justify-between">
                      <button type="button" onclick="prev()" id="precedent"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Pré
                      </button>
                      <button type="button"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            valide
                      </button>
               </div>
          </div>

         
        </form>
   
      </div>
      <script>



document.getElementById('step2').hidden=true;
 
 function next(){
 
 document.getElementById('step2').hidden=false;
 
 document.getElementById('step1').hidden=true;
 

 }
 function prev(){


document.getElementById('step2').hidden=true;

document.getElementById('step1').hidden=false;





}


//         let i = 0

// let step = document.querySelector("#step")
// let form = document.querySelector("form")
// let precedent = document.querySelector("#precedent")

// let affichage = () => {
//     step.textContent = i+1;
//     (i == 0) ? precedent.setAttribute('disabled', ''): precedent.removeAttribute('disabled');
//  if (i=1){
//   form.innerHTML = `
//   <div class="flex flex-wrap -mx-3 mb-6">
//                 <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
//                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
//                    Title
//                   </label>
//                   <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Title">
                
//                 </div>
//                 <div class="w-full md:w-1/2 px-3">
//                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
//                      Slug
//                   </label>
//                   <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-namee" type="text" placeholder="slug">
//                 </div>
//               </div>
//               <div class="flex flex-wrap -mx-3 mb-6">
//                 <div class="w-full px-3">
//                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
//                     categorie
//                   </label>
//                   <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Ctegorie">
//                     @foreach ($categories as $categorie)
//                     <option value= "{{ $categorie->id}}">{{$categorie->name}}</option>
//                     @endforeach
//                 </select>
//                 </div>
//               </div>
//               <div class="flex flex-wrap -mx-3 mb-6">
//                 <div class="w-full px-3">
//                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
//                     Tages
//                   </label>
//                   <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Ctegorie">
//                     @foreach ($tages as $tage)
//                     <option value= "{{ $tage->id}}">{{$tage->name}}</option>
//                     @endforeach
//                 </select>
//                 </div>
//               </div>
//               <div class="flex flex-wrap -mx-3 mb-6">
//                 <div class="w-full px-3">
//                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
//                     Author
//                   </label>
//                   <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="author">
                
//                 </div>
//               </div>
//           <div class="flex items-center justify-between">
          
//             <button type="button" id="precedent"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
//                 Pré
//                 </button>
//             <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
//               suive
//               </button>
//           </div> `;
//  }else {
//         formulaire.innerHTML = `
//        ffff `;

// }
// }
// affichage()
// form.addEventListener("submit",(e) => {
//     e.preventDefault()
//     i++;
//     // if(i=1){
//     //   formulaire.innerHTML = `
//     //    gggg `;
//     // }
//     affichage()
//   })
//   precedent.addEventListener("click", () => {
//     i--;
//     affichage()
// })
        </script>
      {{-- <script src="../js/step.js"></script> --}}
</body>     
</html>