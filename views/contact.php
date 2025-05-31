<div class="container my-3 p-3" id="contact">
    <div class="row">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <ul class="icon-contact" style="list-style: none;">
                <li><i class="bi bi-github" style="font-size: 50px;"></i><a href="">Example.ITHub</a></li>
                <li><i class="bi bi-linkedin" style="font-size: 50px;"></i><a href="">Example.ITHub</a></li>
                <li><i class="bi bi-envelope-at-fill" style="font-size: 50px;"></i><a href="">example.ithub@gmail.com</a></li>        
            </ul>
        </div>
        <div class="col-6">
        <h2>Contact Us</h2>
    <?php if ($result): ?>
        <div class="alert alert-<?= $result['success'] ? 'success' : 'danger'; ?>">
            <?= $result['message']; ?>
        </div>
    <?php endif; ?>
     <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Yourname</label>
            <input type="text" id="name" name="name" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
        </div>
        <button type="submit" class="w-100 send-btn">Send</button>
     </form>
        </div>
    </div>    
</div>