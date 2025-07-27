<!-- Header Text Animation -->
<style>
    .text-uppercase {
      text-transform: uppercase;
      margin: 0 0 1rem 0;
    }
    /* Fade-in with slide up */
    .fade-slide {
      opacity: 0;
      transform: translateY(20px);
      animation-fill-mode: forwards;
      animation-name: fadeSlideUp;
      animation-duration: 0.8s;
      animation-timing-function: ease-out;
    }
    .fade-slide.delay-0 { animation-delay: 0s; }
    .fade-slide.delay-1 { animation-delay: 0.3s; }
    .fade-slide.delay-2 { animation-delay: 0.6s; }
    @keyframes fadeSlideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Typing effect container */
    #typeWriter {
      font-weight: 700;
      font-size: 2.8rem;
      line-height: 1.2;
      white-space: pre-line; /* to support line breaks */
      display: inline-block;
      border-right: 2px solid transparent;
      letter-spacing: 2px;
      min-height: 3.5rem;
    }

    /* Cursor blinking */
    #typeWriter.cursor {
      border-color: #222;
      animation: blink 1s steps(2, start) infinite;
    }
    @keyframes blink {
      0%, 50% {
        border-color: #222;
      }
      50.1%, 100% {
        border-color: transparent;
      }
    }
    
    @media only screen and (max-width: 531px) {
      #typeWriter {
        font-size: 1.8rem;
      }
    }
</style>

<style>
          #typeWriter {
							height: 50px; /* Adjust based on your font-size */
							display: inline-block;
							overflow: hidden;
							white-space: nowrap;
						}
						@media (max-width: 768px) {
							#typeWriter {
								height: 40px;
							}
						}
						@media (min-width: 769px) {
							#typeWriter {
								height: 50px;
							}
						}
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
      const typeEl = document.getElementById("typeWriter");
      const rawText = typeEl.getAttribute("data-text");
      const text = rawText.replace(/\\n/g, '\n'); // convert \n to line breaks
      let index = 0;
      const typingSpeed = 100;  // ms per character
      const pauseDelay = 2000;  // pause at end

      function type() {
        if (index <= text.length) {
          typeEl.textContent = text.substring(0, index);
          index++;
          typeEl.classList.add("cursor");
          setTimeout(type, typingSpeed);
        } else {
          // Pause with cursor blinking
          setTimeout(() => {
            // Reset and restart typing
            index = 0;
            typeEl.textContent = "";
            typeEl.classList.remove("cursor"); // hide cursor briefly before restart
            setTimeout(() => {
              type();
            }, 300);
          }, pauseDelay);
        }
      }

      type();
    });
</script>
<!-- Header Text Animation -->


<!-- Counter Animation -->
<script>
document.addEventListener("DOMContentLoaded", function () {
						const counters = document.querySelectorAll('.counter');
						const options = { threshold: 0.5 };
						const speed = 200; // Lower = faster

						const counterObserver = new IntersectionObserver(function (entries, observer) {
							entries.forEach(entry => {
								if (entry.isIntersecting) {
									const counter = entry.target;
									const updateCount = () => {
										const target = +counter.getAttribute('data-target');
										const count = +counter.innerText.replace(/\D/g, '');

										const increment = Math.ceil(target / speed);

										if (count < target) {
											counter.innerText = count + increment + (counter.innerText.includes('+') ? '+' : (counter.innerText.includes('K') ? 'K' : ''));
											setTimeout(updateCount, 20);
										} else {
											counter.innerText = target + (counter.innerText.includes('+') ? '+' : (counter.innerText.includes('K') ? 'K' : ''));
										}
									};
									updateCount();
									observer.unobserve(counter); // Animate only once
								}
							});
						}, options);

						counters.forEach(counter => {
							counterObserver.observe(counter);
						});
});
</script>
<!-- Counter Animation -->