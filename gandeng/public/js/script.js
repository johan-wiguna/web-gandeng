/* HOME PAGE */
/* carousel items*/

function switchAbout(id){
        var selected = document.getElementById(id)
        var navParent = selected.parentElement //ul
        var navs = navParent.children //li

        var contentParent = document.getElementById('content-parent') //content-parent
        var contents = contentParent.children //section founder-vm-story
        var selectedIdx

        for (var i = 0; i<navs.length; i++){
                navs[i].classList.remove('nav-active')

                if(navs[i].id === id){
                        selectedIdx = i
                }
        }

        selected.classList.add('nav-active')

        for (var i = 0; i<contents.length; i++){
                contents[i].classList.add('d-none')

                if(selectedIdx === i){
                        contents[i].classList.remove('d-none')        
                }
        }
        

}