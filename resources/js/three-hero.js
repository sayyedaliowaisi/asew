import * as THREE from 'three';

const container = document.getElementById('asew-3d-scene');

if (!container) {
    // 3D scene sirf 3D homepage par chalega.
} else {

    /* =====================================================
       SCENE
    ===================================================== */

    const scene = new THREE.Scene();

    scene.background = new THREE.Color(0x020b14);


    /* =====================================================
       CAMERA
    ===================================================== */

    const camera = new THREE.PerspectiveCamera(
        42,
        window.innerWidth / window.innerHeight,
        0.1,
        100
    );

    camera.position.set(5.8, 3.8, 8.5);


    /* =====================================================
       RENDERER
    ===================================================== */

    const renderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true
    });

    renderer.setPixelRatio(
        Math.min(window.devicePixelRatio, 2)
    );

    renderer.setSize(
        window.innerWidth,
        window.innerHeight
    );

    renderer.outputColorSpace = THREE.SRGBColorSpace;

    container.appendChild(renderer.domElement);


    /* =====================================================
       LIGHTING
    ===================================================== */

    const ambientLight = new THREE.AmbientLight(
        0xffffff,
        1.4
    );

    scene.add(ambientLight);


    const keyLight = new THREE.DirectionalLight(
        0xffffff,
        3
    );

    keyLight.position.set(4, 8, 6);

    scene.add(keyLight);


    const redLight = new THREE.PointLight(
        0xe31e24,
        18,
        12
    );

    redLight.position.set(
        -3,
        3,
        2
    );

    scene.add(redLight);


    /* =====================================================
       MATERIALS
    ===================================================== */

    const darkMetal = new THREE.MeshStandardMaterial({
        color: 0x26343e,
        metalness: 0.85,
        roughness: 0.25
    });


    const steel = new THREE.MeshStandardMaterial({
        color: 0x9da7ad,
        metalness: 0.9,
        roughness: 0.2
    });


    const redMaterial = new THREE.MeshStandardMaterial({
        color: 0xe31e24,
        metalness: 0.45,
        roughness: 0.25
    });


    const blackMaterial = new THREE.MeshStandardMaterial({
        color: 0x05090d,
        metalness: 0.7,
        roughness: 0.2
    });


    /* =====================================================
       MACHINE GROUP
    ===================================================== */

    const machine = new THREE.Group();

    machine.position.set(
        2.2,
        -1.25,
        0
    );

    machine.rotation.y = -0.35;

    scene.add(machine);


    /* =====================================================
       BASE
    ===================================================== */

    const baseGeometry =
        new THREE.BoxGeometry(
            3.8,
            0.45,
            2.5
        );

    const base =
        new THREE.Mesh(
            baseGeometry,
            darkMetal
        );

    machine.add(base);


    /* =====================================================
       TOP FRAME
    ===================================================== */

    const topGeometry =
        new THREE.BoxGeometry(
            3.4,
            0.42,
            2.1
        );

    const top =
        new THREE.Mesh(
            topGeometry,
            darkMetal
        );

    top.position.y = 4.7;

    machine.add(top);


    /* =====================================================
       FOUR COLUMNS
    ===================================================== */

    const columnGeometry =
        new THREE.CylinderGeometry(
            0.14,
            0.14,
            4.25,
            32
        );

    const columnPositions = [
        [-1.35, 2.35, -0.75],
        [ 1.35, 2.35, -0.75],
        [-1.35, 2.35,  0.75],
        [ 1.35, 2.35,  0.75]
    ];

    columnPositions.forEach(position => {

        const column =
            new THREE.Mesh(
                columnGeometry,
                steel
            );

        column.position.set(
            position[0],
            position[1],
            position[2]
        );

        machine.add(column);

    });


    /* =====================================================
       TESTING PLATEN
    ===================================================== */

    const platenGeometry =
        new THREE.BoxGeometry(
            2.3,
            0.28,
            1.65
        );

    const platen =
        new THREE.Mesh(
            platenGeometry,
            steel
        );

    platen.position.y = 2.15;

    machine.add(platen);


    /* =====================================================
       SPECIMEN
    ===================================================== */

    const specimenGeometry =
        new THREE.BoxGeometry(
            0.8,
            0.8,
            0.8
        );

    const specimen =
        new THREE.Mesh(
            specimenGeometry,
            redMaterial
        );

    specimen.position.y = 2.72;

    machine.add(specimen);


    /* =====================================================
       UPPER PRESS
    ===================================================== */

    const pressGeometry =
        new THREE.CylinderGeometry(
            0.42,
            0.42,
            0.5,
            32
        );

    const press =
        new THREE.Mesh(
            pressGeometry,
            steel
        );

    press.position.y = 3.35;

    machine.add(press);


    /* =====================================================
       CONTROL BOX
    ===================================================== */

    const controlGeometry =
        new THREE.BoxGeometry(
            0.85,
            1.25,
            0.5
        );

    const controlBox =
        new THREE.Mesh(
            controlGeometry,
            blackMaterial
        );

    controlBox.position.set(
        2.25,
        1.25,
        0
    );

    machine.add(controlBox);


    /* =====================================================
       DISPLAY
    ===================================================== */

    const displayGeometry =
        new THREE.BoxGeometry(
            0.52,
            0.35,
            0.04
        );

    const display =
        new THREE.Mesh(
            displayGeometry,
            redMaterial
        );

    display.position.set(
        2.25,
        1.55,
        -0.27
    );

    machine.add(display);


    /* =====================================================
       FLOOR
    ===================================================== */

    const floorGeometry =
        new THREE.CircleGeometry(
            7,
            64
        );

    const floorMaterial =
        new THREE.MeshStandardMaterial({
            color: 0x07141e,
            metalness: 0.4,
            roughness: 0.7
        });

    const floor =
        new THREE.Mesh(
            floorGeometry,
            floorMaterial
        );

    floor.rotation.x = -Math.PI / 2;

    floor.position.y = -1.5;

    scene.add(floor);


    /* =====================================================
       MOUSE INTERACTION
    ===================================================== */

    let mouseX = 0;
    let mouseY = 0;

    window.addEventListener(
        'pointermove',
        (event) => {

            mouseX =
                (event.clientX / window.innerWidth) * 2 - 1;

            mouseY =
                (event.clientY / window.innerHeight) * 2 - 1;

        }
    );


    /* =====================================================
       ANIMATION
    ===================================================== */

    const clock = new THREE.Clock();

    function animate() {

        requestAnimationFrame(animate);

        const elapsed =
            clock.getElapsedTime();


        machine.rotation.y +=
            (
                (-0.35 + mouseX * 0.18)
                - machine.rotation.y
            ) * 0.035;


        machine.rotation.x +=
            (
                (mouseY * 0.05)
                - machine.rotation.x
            ) * 0.035;


        machine.position.y =
            -1.25 +
            Math.sin(elapsed * 0.7) * 0.035;


        specimen.rotation.y =
            elapsed * 0.4;


        renderer.render(
            scene,
            camera
        );

    }

    animate();


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    window.addEventListener(
        'resize',
        () => {

            camera.aspect =
                window.innerWidth /
                window.innerHeight;

            camera.updateProjectionMatrix();

            renderer.setSize(
                window.innerWidth,
                window.innerHeight
            );

        }
    );

}