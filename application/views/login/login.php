    <div class="container d-flex justify-content-between my-3">
        <div>
            <?php $logoUmb = [
                'src' => 'bootstrap/assets/logoumb.png',
                'width' => '220',
                'height' => '80',
            ] ?>
            <?= img($logoUmb) ?>
        </div>

        <div>
            <?php $logoKM = [
                'src' => 'bootstrap/assets/kampusmerdeka.png',
                'width' => '150',
                'height' => '80',
            ] ?>
            <?= img($logoKM) ?>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card col-9 me-1 mb-auto">
            <div class="card-body fw-light">
                <h4 class="card-title text-center fw-light">PENGUMUMAN</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris justo mi, suscipit ac orci ut,
                    convallis efficitur mauris. Aliquam quis scelerisque orci. Proin in ante tempor, fermentum tortor ut,
                    porttitor urna. Phasellus sapien lacus, tristique ut libero nec, cursus elementum sem. Phasellus commodo,
                    elit quis commodo ornare, massa ante fermentum turpis, id dignissim metus leo id risus. Cras viverra arcu
                    at finibus molestie. Maecenas pulvinar ut massa sit amet malesuada. Phasellus et imperdiet eros. Vivamus
                    luctus bibendum faucibus. In dapibus purus eget ipsum sollicitudin porttitor.
                </p>

                <p>
                    Duis ac commodo erat. Nam lacinia sollicitudin quam, vitae lobortis felis vehicula eu. Nam congue lectus felis,
                    sit amet elementum leo iaculis sit amet. In mollis arcu vitae mi tempor, ac condimentum nibh posuere. Pellentesque
                    varius ante id purus dignissim consequat. Cras fringilla arcu a quam tempus, sed vehicula ipsum vestibulum. Etiam
                    vehicula scelerisque ligula, vel feugiat est lacinia eu. Curabitur neque tellus, ornare vulputate finibus ut,
                    aliquam ac odio. Aliquam pulvinar iaculis quam, sed sodales ipsum ornare ac. Proin tempor tempor arcu vitae pulvinar.
                    Nullam id vestibulum est, id lobortis turpis. Etiam ullamcorper accumsan leo at egestas. Suspendisse viverra, neque
                    congue efficitur interdum, nulla purus ornare quam, non consequat lacus erat vitae sapien. Donec laoreet velit lorem,
                    quis dictum odio cursus vel.
                </p>
            </div>
        </div>
        <div class="card col-3 ms-1 mb-auto">
            <div class="card-body fw-light">
                <?= validation_errors() ?>
                <?= form_open('login/auth') ?>
                <h4 class="card-title text-center fw-light">LOGIN</h4>

                <div class="d-grid gap-2 mb-3">
                    <div>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control form-select-sm" size="30" required>
                    </div>

                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-select-sm" size="30" required>
                    </div>
                </div>

                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-secondary btn-sm">Login</button>
                </div>

                <div class="fw-light link-secondary text-center mt-2">
                    <a href="<?= site_url('akun/register') ?>" class="text-decoration-none">Don't have an account? <u>Register!</u></a>
                </div>
                </form>
            </div>
        </div>
    </div>