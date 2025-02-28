$(function() {

  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();


const tabs = document.querySelectorAll(".tab");

function tabify(tab) {
  const tabList = tab.querySelector(".tab__list");

  if (tabList) {
    const tabItems = [...tabList.children];
    const tabContent = tab.querySelector(".tab__content");
    const tabContentItems = [...tabContent.children];
    let tabIndex = 0;

    tabIndex = tabItems.findIndex((item, index) => {
      return [...item.classList].indexOf("is--active") > -1;
    });

    tabIndex > -1 ? (tabIndex = tabIndex) : (tabIndex = 0);

    function setTab(index) {
      tabItems.forEach((x, index) => x.classList.remove("is--active"));
      tabContentItems.forEach((x, index) => x.classList.remove("is--active"));

      tabItems[index].classList.add("is--active");
      tabContentItems[index].classList.add("is--active");
    }

    tabItems.forEach((x, index) =>
      x.addEventListener("click", () => setTab(index))
    );
    setTab(tabIndex);
    tab.querySelectorAll(".tab").forEach((tabContent) => tabify(tabContent));
  }
}

tabs.forEach(tabify);

});


$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 0;  // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "Read More";
    var lesstext = "Read Less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent read-more"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink mt-3">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

$(document).ready(function() {
  $(".set > a").on("click", function() {
     event.preventDefault()
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });
});


$('.top_space').on('click',function (e) {
  var target = this.hash,
      $target = $(target);

  $('html, body').stop().animate({
    'scrollTop': $target.offset().top-150
  }, 900, function () {
    window.location.hash = target;
  });
});

