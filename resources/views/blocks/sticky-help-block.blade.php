<!-- Sticky Help Block -->
@if(request()->route()->getName() == 'home' || request()->getPathInfo() == '/build-your-sauna.html')
<div id="stickyHelpBlock" class="sticky-help-block" style="display: none;">
    <button class="sticky-help-close">
        <i class="fas fa-times"></i>
    </button>
    <div class="sticky-help-content">
        <div class="sticky-help-text">
            <i class="fas fa-question-circle"></i>
            <span>Do you need help? Call us or fill out the consultation form.</span>
        </div>
        <div class="sticky-help-actions">
            <a href="tel:+1-888-559-7278" class="btn btn-call">
                <i class="fas fa-phone"></i> Call
            </a>
            <a href="#" class="btn btn-consultation" data-toggle="modal" data-target="#form_1">
                <i class="far fa-comment"></i> Consultation
            </a>
        </div>
    </div>
</div>

<script>
let stickyBlockShown = false;
let isBlockClosed = false;

// Show sticky block on scroll down (home page)
if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
    window.addEventListener('scroll', function() {
        if (isBlockClosed) return;
        
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;
        
        // Show block when user scrolls down at least 500px or reaches 30% of page
        if ((scrollPosition > 500 || scrollPosition > documentHeight * 0.3) && !stickyBlockShown) {
            document.getElementById('stickyHelpBlock').style.display = 'block';
            setTimeout(function() {
                document.getElementById('stickyHelpBlock').classList.add('show');
            }, 100);
            stickyBlockShown = true;
        }
    });
}

// Show sticky block after 20 seconds (build-your-sauna page)
if (window.location.pathname === '/build-your-sauna.html') {
    setTimeout(function() {
        if (!isBlockClosed) {
            document.getElementById('stickyHelpBlock').style.display = 'block';
            setTimeout(function() {
                document.getElementById('stickyHelpBlock').classList.add('show');
            }, 100);
            stickyBlockShown = true;
        }
    }, 20000); // 20 seconds
}

function closeStickyBlock() {
    isBlockClosed = true;
    document.getElementById('stickyHelpBlock').classList.remove('show');
    setTimeout(function() {
        document.getElementById('stickyHelpBlock').style.display = 'none';
    }, 300);
}

// Add touch event listener for mobile devices
document.addEventListener('DOMContentLoaded', function() {
    const closeButton = document.querySelector('.sticky-help-close');
    if (closeButton) {
        closeButton.addEventListener('touchstart', function(e) {
            e.preventDefault();
            closeStickyBlock();
        });
        
        closeButton.addEventListener('click', function(e) {
            e.preventDefault();
            closeStickyBlock();
        });
    }
});
</script>
@endif 