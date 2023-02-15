const btn = document.getElementById('add-line-form');
const form = document.querySelector('.form')
var i =1;
const lineForm = `<div class="form-row mt-3">
                            <i class="fa fa-minus btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                                <div class="col mt-1 mt-sm-0">
                                    <input name="qte" type="number" class="form-control" min="0" placeholder="nombre">
                                </div>
                            <i class="fa fa-plus btn btn-success"  onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="designation">
                            </div>
                            <div class="col mt-1 mt-sm-0">
                                <input type="number" class="form-control" min="0" placeholder="prix unitaire">
                            </div>

                            <div class="col mt-1 mt-sm-0">
                                <input type="number" class="form-control" placeholder="prix total" readonly value="12000">
                            </div>
                            <i class="fa fa-trash btn btn-danger" onclick="supprimer(event)"></i>
                        </div>`
btn.addEventListener('click',()=>{
    form.innerHTML = form.innerHTML + lineForm;
    console.log(i++);
})

function supprimer(e){
    e.target.parentNode.remove();
}

function valueOfInput(e) {
    console.log(e.target.value)
}
