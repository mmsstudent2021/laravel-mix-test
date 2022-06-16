import Swal from 'sweetalert2';
import ScrollReveal from 'scrollreveal'
import * as bootstrap from 'bootstrap';


let modalControl = document.getElementById('modalControl');
let check = document.getElementById('check');

modalControl.addEventListener('click',function (){
    // console.log("san kyi tar")
    let exampleModal = new bootstrap.Modal(document.getElementById('exampleModal'),{
        backdrop : 'static'
    });
    exampleModal.show();
})

check.addEventListener('click',function (){
    Swal.fire({
        title: 'မင်းသေခြာရဲ့လား သားကြီး',
        text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: 'var(--bs-primary)',
        cancelButtonColor: 'var(--bs-danger)',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if(result.isConfirmed){
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'စမ်းကြည့်တာပါကွာ'
            })
        }else {
            console.log('cancel')
        }
    })
})

ScrollReveal().reveal(".list-group-item",{
    distance : "30px",
    origin : "top",
    duration : 500,
    interval : 200
})
