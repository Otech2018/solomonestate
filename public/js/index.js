
window.addEventListener('scroll', () => {
    let dashboardNav = document.querySelector('.dashboard_nav');
    dashboardNav.classList.toggle('sticky', window.scrollY > 0);
})

// window.addEventListener('scroll', () => {
//     let header = document.querySelector('.header');
//     header.classList.toggle('opaque', window.scrollY > 0);
// })


let toggleSeen = document.querySelector('.toggle__seen');
let toggleUnseen = document.querySelector('.toggle__unseen');
let profile = document.querySelector('.profile');
let profilePopup = document.querySelector('.profile_popup');

function show_and_hide_password(password, show_span) {
	let pass = document.querySelector('#'+password);
	let pas = $('#'+password).attr('type');
	let span_seen_icon = '<i class="show_password fas fa-eye"></i>';
	let span_unseen_icon = '<i class="show_password fas fa-eye-slash"></i>';
	if (pas == 'password') {
		pass.setAttribute('type', 'text');
		$('#'+show_span).html(span_seen_icon);
	}else if(pas == 'text'){
		pass.setAttribute('type', 'password');
		$('#'+show_span).html(span_unseen_icon);
	}
}


profile.addEventListener('click', () => {
	profilePopup.classList.toggle('active');
})

function showLogin(option) {
	$("#user_type").val(option);
	$('#form_ch').fadeOut(); 
	$('#form_reg').fadeIn();
}

function backButton() {
	$('#form_ch').fadeIn();
	$('#form_reg').fadeOut();
}



// let menu = document.querySelector('.menu');
// let bars = document.querySelectorAll('.bar');
// let nav = document.querySelector('.nav');

// menu.addEventListener('click', ()=>{
//     // bars.forEach((bar) => {
//     //     bar.classList.toggle('active');
//     // });
//     menu.classList.toggle('active');
//     nav.classList.toggle('active');
// });
