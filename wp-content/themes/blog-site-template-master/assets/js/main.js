jQuery(document).ready(function () {
  new WOW().init();

  //For Conversion from percent to pixel
  function funct_convert_to_percent(height, percentage) {
    var covert_to_percent_decimal = percentage / 100;
    var get_percent_pexel = height * covert_to_percent_decimal;
    return get_percent_pexel;
  }
  // For Joining Class
  function funct_join_class(class_name) {
    var join_class = "." + class_name.split(" ").join(".");
    return join_class;
  }
  //animation for Counting Numbers
  let delay_percentage_text = 0;
  function funct_animate_percentage_text(target, value, round) {
    delay_percentage_text += 500;
    anime({
      targets: target,
      innerHTML: [0, value],
      round: round,
      opacity: [0, 1],
      delay: delay_percentage_text,
    });
  }
  //Animation for to percentage bar to go up
  let delay_percentage = 0;
  function funct_animate_percentage(target, height) {
    delay_percentage += 500;
    anime({
      targets: target,
      height: height,
      delay: delay_percentage,
    });
  }
  // It will promp when an element view the screen
  var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
      //For Opportunity Section Graph
      if ($(entry.target).hasClass("opportunity__wrap-2")) {
        if (entry.isIntersecting) {
          funct_observed_percentage();
          funct_observed_percentage_text();
          observer.unobserve(entry.target);
        }
      }
      //For Team Images and Rounds

      if ($(entry.target).hasClass("team__content")) {
        if (entry.isIntersecting) {
          var class_team_circle = $(entry.target).find(".team__circle");
          var class_team_image = $(entry.target).find(".team__img img");
          var joined_team_circle = funct_join_class(
            class_team_circle.attr("class")
          );

          var joined_team_image = funct_join_class(
            class_team_image.attr("class")
          );

          anime({
            targets: joined_team_circle,
            scale: [0, 1],
            opacity: [0, 1],
            delay: 1000,
          });
          anime({
            targets: joined_team_image,
            opacity: [0, 1],
            translateY: [27, 0],
            opacity: [0, 1],
            delay: 1500,
          });
          setTimeout(() => {
            class_team_circle.addClass("active");
          }, 1700);

          observer.unobserve(entry.target);
        }
      }
    });
  });
  if ($(".opportunity__wrap").hasClass("opportunity__wrap-2")) {
    observer.observe($(".opportunity__wrap.opportunity__wrap-2")[0]);
  }

  function funct_observed_percentage() {
    $(".opportunity__bar .opportunity__percentage").each(function () {
      var get_height = $(this)
        .closest("section.opportunity--section")
        .find(".opportunity__wrap.opportunity__wrap-2")
        .height();
      var get_data_percentage = $(this)
        .closest(".opportunity__bar ")
        .find(".opportunity__percent__info")
        .attr("data-percentage");
      var get_percentage_class = $(this).attr("class");
      var get_height_pexel = funct_convert_to_percent(
        get_height,
        get_data_percentage
      );
      var get_joined_class = funct_join_class(get_percentage_class);
      funct_animate_percentage(get_joined_class, get_height_pexel);
    });
  }
  function funct_observed_percentage_text() {
    var get_viewport_width = $("body").width();

    $(".opportunity--section .opportunity__percent-text").each(function () {
      var round;
      var get_percentage_info = $(this);
      var get_class_percentage_info = get_percentage_info.attr("class");
      var get_percenatage_info_val = get_percentage_info.text();
      var send_info_joined_class = funct_join_class(get_class_percentage_info);
      if (get_viewport_width >= 720) {
        round = 100;
      } else {
        round = 1;
      }
      funct_animate_percentage_text(
        send_info_joined_class,
        get_percenatage_info_val,
        round
      );
    });
  }

  $(".opportunity__percentage-label").each(function () {
    var get_percent_data = $(this).attr("data-percent");
    var get_height = $(this)
      .closest("section.opportunity--section")
      .find(".opportunity__wrap.opportunity__wrap-2")
      .height();
    var convert_to_px = funct_convert_to_percent(get_height, get_percent_data);

    var get_next_height = $(this).first().next().attr("data-percent");
    var convert_next_height = funct_convert_to_percent(
      get_height,
      get_next_height
    );
    var total_px = convert_to_px - convert_next_height;
    console.log(get_percent_data + " - " + get_next_height);
    $(this).css("height", total_px + "px");
  });

  $(".team__wrapper .team__content").each(function () {
    observer.observe(this);
  });
});
