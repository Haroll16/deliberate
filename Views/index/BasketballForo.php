<?php
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../');

include 'header.php';

include 'menu.php';
?>
<div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header d-flex align-items-center bg-primary text-white">
                    <h6 class="modal-title mb-0" id="threadModalLabel">Nueva Discusion</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="threadTitle">Titulo</label>
                        <input type="text" class="form-control" id="threadTitle" placeholder="Enter title"
                            autofocus="" />
                    </div>
                    <textarea class="form-control summernote" style="display: none;"></textarea>

                    <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                        <input type="file" class="custom-file-input" id="customFile" multiple="" />
                        <label class="custom-file-label" for="customFile">Cargar Archivos</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Postear</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container-fluid mt-100">
    <div class="d-flex flex-wrap justify-content-between">
        <div class="inner-sidebar-header justify-content-center">
            <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal"
                data-target="#threadModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-plus mr-2">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Nueva Discusion
            </button>

        </div>

        <div class="col-12 col-md-3 p-0 mb-3"> <input type="text" class="form-control" placeholder="Search..."> </div>
    </div>
    <div class="card mb-3">
        <div class="card-header pl-0 pr-0">
            <div class="row no-gutters w-100 align-items-center">
                <div class="col ml-3">Tema Deportes</div>
                <div class="col-4 text-muted">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">Respuesta</div>
                        <div class="col-8">Ultima Novedad</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">James Hickey (44) of
                        Ireland sets a new Masters World Record in the deadlift with a pull of 969lbs / 440kg. This
                        event took place in Ireland 2 days ago.</a>
                    <div class="text-muted small mt-1">Publicado hace 25 dias &nbsp;·&nbsp; <a href="javascript:void(0)"
                            class="text-muted" data-abc="true">TheGuvnor247</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center"> <img
                                src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairFro&accessoriesType=Round&hairColor=PastelPink&facialHairType=BeardLight&facialHairColor=Black&clotheType=GraphicShirt&clotheColor=Blue01&graphicType=Skull&eyeType=Happy&eyebrowType=RaisedExcitedNatural&mouthType=Concerned&skinColor=Brown'
                                alt="Avatar de Usuario" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">Hace 1 dia</div> <a href="javascript:void(0)"
                                    class="text-muted small text-truncate" data-abc="true">por Tim cook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Real Salt Lake eliminate
                        the Seattle Sounders in PK’s after not recording a single shot the entire match</a> <span
                        class="badge badge-success align-text-bottom ml-1">Solved</span>
                    <div class="text-muted small mt-1">Publicado hace 5 dias &nbsp;·&nbsp; <a href="javascript:void(0)"
                            class="text-muted" data-abc="true">snowspida</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">43</div>
                        <div class="media col-8 align-items-center"> <img
                                src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=BeardMajestic&facialHairColor=Blonde&clotheType=BlazerSweater&clotheColor=Gray01&graphicType=Selena&eyeType=Close&eyebrowType=SadConcerned&mouthType=Smile&skinColor=Brown'
                                alt="Avatar de Usuario" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">Hace 1 dia</div> <a href="javascript:void(0)"
                                    class="text-muted small text-truncate" data-abc="true">por Steve smith</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Norway Criticizes Qatar
                        Over Arrest Of Norwegian Journalists There To Report On 2022 FIFA World Cup</a> <span
                        class="badge badge-default align-text-bottom ml-1">Locked</span>
                    <div class="text-muted small mt-1">Publicado hace 21 dias &nbsp;·&nbsp; <a href="javascript:void(0)"
                            class="text-muted" data-abc="true">Motor-Ad-8858</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">42</div>
                        <div class="media col-8 align-items-center"> <img
                                src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Kurt&hatColor=Blue02&hairColor=BrownDark&facialHairType=BeardMedium&facialHairColor=Brown&clotheType=BlazerSweater&eyeType=Close&eyebrowType=Angry&mouthType=Smile&skinColor=Black'
                                alt="Avatar de Usuario" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">Hace 2 dias</div> <a href="javascript:void(0)"
                                    class="text-muted small text-truncate" data-abc="true">por Brethwett sonm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">New rules in World
                        Rugby: Players can shift to national teams</a>
                    <div class="text-muted small mt-1">Publicado hace 34 dias&nbsp;·&nbsp; <a href="javascript:void(0)"
                            class="text-muted" data-abc="true">moeen_dahir</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">632</div>
                        <div class="media col-8 align-items-center"> <img
                                src='https://avataaars.io/?avatarStyle=Circle&topType=WinterHat2&accessoriesType=Blank&hatColor=Blue01&hairColor=BlondeGolden&facialHairType=BeardLight&facialHairColor=BrownDark&clotheType=BlazerShirt&clotheColor=PastelBlue&eyeType=Cry&eyebrowType=AngryNatural&mouthType=Vomit&skinColor=Pale'
                                alt="Avatar de Usuario" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">Hace 23 dias</div> <a href="javascript:void(0)"
                                    class="text-muted small text-truncate" data-abc="true">por Neil patels</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">In Abu Dhabi , UAE the
                        ADNOC marathon of 2021 kicks on</a> <span
                        class="badge badge-secondary align-text-bottom ml-1">Closed</span>
                    <div class="text-muted small mt-1">Publicado hace 9 dias &nbsp;·&nbsp; <a href="javascript:void(0)"
                            class="text-muted" data-abc="true">TheseWeather2905</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">53</div>
                        <div class="media col-8 align-items-center"> <img
                                src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraightStrand&accessoriesType=Sunglasses&hairColor=SilverGray&facialHairType=Blank&clotheType=Hoodie&clotheColor=Heather&eyeType=EyeRoll&eyebrowType=AngryNatural&mouthType=Default&skinColor=Tanned'
                                alt="Avatar de Usuario" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">Hace 2 dias</div> <a href="javascript:void(0)"
                                    class="text-muted small text-truncate" data-abc="true">por Tibok tom</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">World Cup host Qatar
                        used ex-CIA officer to spy on FIFA</a> <span
                        class="badge badge-danger align-text-bottom ml-1">Hot!</span>
                    <div class="text-muted small mt-1">Publicado hace 12 dias &nbsp;·&nbsp; <a href="javascript:void(0)"
                            class="text-muted" data-abc="true">Sanlear</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center"> <img
                                src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairDreads&accessoriesType=Prescription02&hairColor=BrownDark&facialHairType=Blank&facialHairColor=Auburn&clotheType=CollarSweater&clotheColor=PastelRed&eyeType=Dizzy&eyebrowType=AngryNatural&mouthType=Serious&skinColor=Brown'
                                alt="Avatar de Usuario" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">Hace 1 dia</div> <a href="javascript:void(0)"
                                    class="text-muted small text-truncate" data-abc="true">por Ross taylor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <ul class="pagination mb-5">
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)" data-abc="true">«</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)" data-abc="true">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">»</a></li>
        </ul>
    </nav>
</div>

<style>
body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .88rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: left;
    background-color: #eef1f3
}

.mt-100 {
    margin-top: 80px
}

.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-width: 0;
    transition: all .2s
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header {
    display: flex;
    align-items: center;
    border-bottom-width: 1px;
    padding-top: 0;
    padding-bottom: 0;
    padding-right: .625rem;
    height: 3.5rem;
    background-color: #fff;
    border-bottom: 1px solid rgba(26, 54, 126, 0.125)
}

.btn-primary.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(63, 106, 216, 0.4), 0 0.0625rem 0.125rem rgba(63, 106, 216, 0.5)
}

.btn.btn-wide {
    padding: .375rem 1.5rem;
    font-size: .8rem;
    line-height: 1.5;
    border-radius: .25rem
}

.btn-primary {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8
}

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.flex-truncate {
    min-width: 0 !important
}

.d-block {
    display: block !important
}

a {
    color: #E91E63;
    text-decoration: none !important;
    background-color: transparent
}

.media img {
    width: 40px;
    height: auto
}
</style>






<script src="<?php echo JS_PATH;?>jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>