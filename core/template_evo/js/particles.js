window.addEventListener("load", windowLoadHandler, !1);
var Debugger = function () {};
function windowLoadHandler() {
  canvasApp();
}
function canvasApp() {
  var e,
    t,
    n,
    o,
    a,
    r,
    i,
    c,
    l,
    s,
    u,
    d,
    f,
    m,
    h,
    p,
    v,
    w,
    y,
    g,
    S,
    b,
    E,
    L,
    M,
    x,
    _,
    I,
    O,
    k,
    q,
    A,
    C,
    Y,
    P,
    H,
    V,
    j = document.getElementById("canvasOne"),
    T = j.getContext("2d");
  function N() {
    if (++o >= n)
      for (o = 0, A = 0; A < a; A++) {
        (C = 2 * Math.random() * Math.PI),
          (Y = Math.acos(2 * Math.random() - 1)),
          (P = p * Math.sin(Y) * Math.cos(C)),
          (H = p * Math.sin(Y) * Math.sin(C)),
          (V = p * Math.cos(Y));
        var i = X(P, v + H, w + V, 0.002 * P, 0.002 * H, 0.002 * V);
        (i.attack = 50),
          (i.hold = 50),
          (i.decay = 160),
          (i.initValue = 0),
          (i.holdValue = c),
          (i.lastValue = 0),
          (i.stuckTime = 80 + 20 * Math.random()),
          (i.accelX = 0),
          (i.accelY = L),
          (i.accelZ = 0);
      }
    for (
      m = (m + h) % (2 * Math.PI),
        _ = Math.sin(m),
        I = Math.cos(m),
        T.fillStyle = "#fff",
        T.fillRect(0, 0, e, t),
        i = r.first;
      null != i;

    )
      (x = i.next),
        i.age++,
        i.age > i.stuckTime &&
          ((i.velX += i.accelX + S * (2 * Math.random() - 1)),
          (i.velY += i.accelY + b * (2 * Math.random() - 1)),
          (i.velZ += i.accelZ + E * (2 * Math.random() - 1)),
          (i.x += i.velX),
          (i.y += i.velY),
          (i.z += i.velZ)),
        (O = I * i.x + _ * (i.z - w)),
        (k = -_ * i.x + I * (i.z - w) + w),
        (s = l / (l - k)),
        (i.projX = O * s + u),
        (i.projY = i.y * s + d),
        i.age < i.attack + i.hold + i.decay
          ? i.age < i.attack
            ? (i.alpha =
                ((i.holdValue - i.initValue) / i.attack) * i.age + i.initValue)
            : i.age < i.attack + i.hold
            ? (i.alpha = i.holdValue)
            : i.age < i.attack + i.hold + i.decay &&
              (i.alpha =
                ((i.lastValue - i.holdValue) / i.decay) *
                  (i.age - i.attack - i.hold) +
                i.holdValue)
          : (i.dead = !0),
        i.projX > e ||
        i.projX < 0 ||
        i.projY < 0 ||
        i.projY > t ||
        k > f ||
        i.dead
          ? Q(i)
          : ((q = (q = 1 - k / g) > 1 ? 1 : q < 0 ? 0 : q),
            (T.fillStyle = M + q * i.alpha + ")"),
            T.beginPath(),
            T.arc(i.projX, i.projY, s * y, 0, 2 * Math.PI, !1),
            T.closePath(),
            T.fill()),
        (i = x);
  }
  function X(e, t, n, o, a, c) {
    var l;
    return (
      null != i.first
        ? null != (l = i.first).next
          ? ((i.first = l.next), (l.next.prev = null))
          : (i.first = null)
        : (l = {}),
      null == r.first
        ? ((r.first = l), (l.prev = null), (l.next = null))
        : ((l.next = r.first),
          (r.first.prev = l),
          (r.first = l),
          (l.prev = null)),
      (l.x = e),
      (l.y = t),
      (l.z = n),
      (l.velX = o),
      (l.velY = a),
      (l.velZ = c),
      (l.age = 0),
      (l.dead = !1),
      Math.random() < 0.5 ? (l.right = !0) : (l.right = !1),
      l
    );
  }
  function Q(e) {
    r.first == e
      ? null != e.next
        ? ((e.next.prev = null), (r.first = e.next))
        : (r.first = null)
      : null == e.next
      ? (e.prev.next = null)
      : ((e.prev.next = e.next), (e.next.prev = e.prev)),
      null == i.first
        ? ((i.first = e), (e.prev = null), (e.next = null))
        : ((e.next = i.first),
          (i.first.prev = e),
          (i.first = e),
          (e.prev = null));
  }
  (o = (n = 1) - 1),
    (a = 8),
    (M = "rgba(" + 51 + "," + 117 + "," + 236 + ","),
    (c = 1),
    (e = j.width),
    (t = j.height),
    (u = e / 2),
    (d = t / 2),
    (f = (l = 320) - 2),
    (r = {}),
    (i = {}),
    (S = 0.1),
    (b = 0.1),
    (E = 0.1),
    (L = 0),
    (y = 2.5),
    (v = 0),
    (w = -3 - (p = 280)),
    (g = -750),
    (h = (2 * Math.PI) / 1600),
    (m = 0),
    setInterval(N, 1e3 / 24);
}


function changeCursor() {
  var e = document.querySelector(".cursor"),
    t = document.querySelector(".cursor__follower"),
    n = document.querySelectorAll(".add"),
    o = 0,
    a = 0,
    r = 0,
    i = 0;
  TweenMax.to({}, 0.01, {
    repeat: -1,
    onRepeat: function () {
      (o += (r - o) / 5),
        (a += (i - a) / 5),
        TweenMax.set(t, { css: { left: o - 12, top: a - 12 } }),
        TweenMax.set(e, { css: { left: r, top: i } });
    },
  }),
    window.addEventListener("mousemove", function (e) {
      (r = e.clientX), (i = e.clientY);
    }),
    n.forEach(function (n) {
      n.addEventListener("mouseenter", function () {
        e.classList.add("active"), t.classList.add("active");
      }),
        n.addEventListener("mouseleave", function () {
          e.classList.remove("active"), t.classList.remove("active");
        });
    });
}
changeCursor();
