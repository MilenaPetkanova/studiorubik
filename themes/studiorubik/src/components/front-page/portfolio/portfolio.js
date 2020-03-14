// import './_cube.scss';

function portfolioCube() {


    function Js3DSurface(id, faces) {
        this._surfaceId = id;
        this._backSurface = document.getElementById(id);
        this._cubes = new Array();
        this._MatrixUtility = new MatrixUtility();
        this._camera = null;

        this._setup = function (faces) {
            this._cubes.push(this._createCube(this._cubes.length, "c2", 0, 0, 0, $(this._backSurface).data('facewidth'), "crate", faces));

            this._camera = new Camera(this._MatrixUtility);

            this._camera._SetDefault();
            this._camera._SetPosition();

            this._loop();
        }

        this._loop = function () {
            var i;

            for (i = 0; i < this._cubes.length; i++) {
                //this._cubes[i]._Torque = new Vector3(1, 1, 0);
                this._cubes[i]._Update(this._camera);
            }

            this._camera._SetPosition();

            var t = this;
            setTimeout(function () {
                t._loop();
            }, 33);
        }

        this._createCube = function (ix, id, x, y, z, d, c, i) {
            var box = new Box(this._MatrixUtility);
            var hD = d * 0.5;

            box._Children.push(this._createFace(ix, 0, id + "_1", 0, hD, 0, -90, 0, 0, d, d, i[0]));
            box._Children.push(this._createFace(ix, 1, id + "_2", 0, -hD, 0, 90, 0, 0, d, d, i[1]));
            box._Children.push(this._createFace(ix, 2, id + "_3", 0, 0, -hD, 0, 180, 0, d, d, i[2]));
            box._Children.push(this._createFace(ix, 3, id + "_4", 0, 0, hD, 0, 0, 0, d, d, i[3]));
            box._Children.push(this._createFace(ix, 4, id + "_5", hD, 0, 0, 0, 90, 0, d, d, i[4]));
            box._Children.push(this._createFace(ix, 5, id + "_6", -hD, 0, 0, 0, -90, 0, d, d, i[5]));

            box._Init(x, y, z);

            return box;
        }

        this._createFace = function (ix, ic, id, x, y, z, rX, rY, rZ, w, h, img) {
            var hW = w * 0.5;
            var hH = h * 0.5;
            var m = this._MatrixUtility._ApplyMatrixToMatrix(this._MatrixUtility._ApplyMatrixToMatrix(this._MatrixUtility._CreateRotationX(this._MatrixUtility._DegToRad(rX)), this._MatrixUtility._CreateRotationY(this._MatrixUtility._DegToRad(rY))), this._MatrixUtility._CreateTranslation(x, y, z));

            id = id;
            var html = "<div id='" + id + "' ix='" + ix + "' ic='" + ic + "' class='f' style='width:" + w + "px; height:" + h + "px; margin-left:-" + hW + "px; margin-top:-" + hH + "px;'>" + img + "</div>";
            $(this._backSurface).append(html);

            var face = new Face(this._MatrixUtility, document.getElementById(id), m);
            return face;
        }

        this._setup(faces);
    }

    function Vector3(x, y, z) {
        this._X = x;
        this._Y = y;
        this._Z = z;
    }

    function Matrix3D() {
        this._M11 = 1;
        this._M12 = 0;
        this._M13 = 0;
        this._M14 = 0;
        this._M21 = 0;
        this._M22 = 1;
        this._M23 = 0;
        this._M24 = 0;
        this._M31 = 0;
        this._M32 = 0;
        this._M33 = 1;
        this._M34 = 0;
        this._M44 = 1;
        this._OffsetX = 0;
        this._OffsetY = 0;
        this._OffsetZ = 0;
    }

    function Face(mu, e, t) {
        this._MatrixUtility = mu;
        this._Element = e;
        this._Transformation = t;
        this._renderingDPs = 5;

        this._Update = function (mt, ct) {
            var m = this._MatrixUtility._ApplyMatrixToMatrix(this._Transformation, this._MatrixUtility._ApplyMatrixToMatrix(mt, ct));
            var x = "matrix3d(" + m._M11.toFixed(this._renderingDPs) + "," + m._M12.toFixed(this._renderingDPs) + "," + m._M13.toFixed(this._renderingDPs) + ",0," + m._M21.toFixed(this._renderingDPs) + "," + m._M22.toFixed(this._renderingDPs) + "," + m._M23.toFixed(this._renderingDPs) + ",0," + m._M31.toFixed(this._renderingDPs) + "," + m._M32.toFixed(this._renderingDPs) + "," + m._M33.toFixed(this._renderingDPs) + ",0," + m._OffsetX.toFixed(this._renderingDPs) + "," + m._OffsetY.toFixed(this._renderingDPs) + "," + m._OffsetZ.toFixed(this._renderingDPs) + ",1)";

            this._Element.style.webkitTransform = x;
            this._Element.style.msTransform = x;
            this._Element.style.transform = x;
            this._Element.style.mozTransform = x;
        }
    }

    function Camera(mu) {
        this._MatrixUtility = mu;
        this._View = null;
        this._Translation = new Vector3(0, 0, -500);
        this._Rotation = new Vector3(0, 180, 0);

        this._SetDefault = function () {
            this._translation = new Vector3(0.0, 24.3, -600);
        }

        this._SetPosition = function () {
            var _trans = this._MatrixUtility._CreateTranslation(0, 0, 700);
            var rotX = this._MatrixUtility._CreateRotationX(this._MatrixUtility._DegToRad(this._Rotation._X));
            var rotY = this._MatrixUtility._CreateRotationY(this._MatrixUtility._DegToRad(this._Rotation._Y));
            var rot = this._MatrixUtility._ApplyMatrixToMatrix(_trans, this._MatrixUtility._ApplyMatrixToMatrix(rotX, rotY));

            _trans = this._MatrixUtility._CreateTranslation(this._Translation._X, this._Translation._Y, this._Translation._Z);
            this._View = this._MatrixUtility._ApplyMatrixToMatrix(_trans, rot);
        }
    }

    function Box(mu) {
        this._MatrixUtility = mu;
        this._Element = null;
        this._Children = new Array();
        this._Rotation = new Vector3(0, 0, 0);
        this._RotationXMatrix = new Matrix3D();
        this._RotationYMatrix = new Matrix3D();
        this._RotationMatrix = new Matrix3D();
        this._TransformationMatrix = new Matrix3D();
        this._TranslationMatrix = new Matrix3D();
        this._Torque = new Vector3(1, 1, 0);
        this._UseTargetRotation = false;

        this._Init = function (x, y, z) {
            this._SetPosition(x, y, z);
        }

        this._SetTargetRotation = function (v, s) {
            this._UseTargetRotation = true;
            this._TargetRotation = v;
            this._TargetRotationStep = s;
        }

        this._SetPosition = function (x, y, z) {
            this._TranslationMatrix._OffsetX = x;
            this._TranslationMatrix._OffsetY = y;
            this._TranslationMatrix._OffsetZ = z;
            this._UpdateTransformationMatrix();
        }

        this._SetRotationXY = function (x, y) {
            this._Rotation._X = x;
            this._Rotation._Y = y;
            this._RotationXMatrix = this._MatrixUtility._CreateRotationX(this._MatrixUtility._DegToRad(x));
            this._RotationYMatrix = this._MatrixUtility._CreateRotationY(this._MatrixUtility._DegToRad(y));
            this._UpdateRotationMatrix();
        }

        this._UpdateRotationMatrix = function () {
            this._RotationMatrix = this._MatrixUtility._ApplyMatrixToMatrix(this._RotationXMatrix, this._RotationYMatrix);
            this._UpdateTransformationMatrix();
        }

        this._UpdateTransformationMatrix = function () {
            this._TransformationMatrix = this._MatrixUtility._ApplyMatrixToMatrix(this._RotationMatrix, this._TranslationMatrix);
        }

        this._Update = function (c) {
            var i;

            for (i = 0; i < this._Children.length; i++) {
                this._Children[i]._Update(this._TransformationMatrix, c._View);
            }

            if (!this._UseTargetRotation) {
                this._SetRotationXY(this._Rotation._X + this._Torque._X, this._Rotation._Y + this._Torque._Y);

                if (this._Torque._X > 1) {
                    this._Torque._X -= 0.01;
                }
                if (this._Torque._Y > 1) {
                    this._Torque._Y -= 0.01;
                }
            } else {}
        }
    }

    function MatrixUtility() {
        this._CreateIdentity = function () {
            var re = new Matrix3D();

            re._M11 = 1;
            re._M12 = 0;
            re._M13 = 0;
            re._M14 = 0;
            re._M21 = 0;
            re._M22 = 1;
            re._M23 = 0;
            re._M24 = 0;
            re._M31 = 0;
            re._M32 = 0;
            re._M33 = 1;
            re._M34 = 0;
            re._OffsetX = 0;
            re._OffsetY = 0;
            re._OffsetZ = 0;
            re._M44 = 1;

            return re;
        }

        this._CreateTranslation = function (x, y, z) {
            var re = new Matrix3D();

            re._M11 = 1;
            re._M14 = 0;
            re._M21 = 0;
            re._M22 = 1;
            re._M23 = 0;
            re._M24 = 0;
            re._M31 = 0;
            re._M32 = 0;
            re._M33 = 1;
            re._M34 = 0;
            re._OffsetX = x;
            re._OffsetY = y;
            re._OffsetZ = z;
            re._M44 = 1;

            return re;
        }

        this._CreateRotationX = function (r) {
            var s = Math.sin(r);
            var c = Math.cos(r);
            var re = new Matrix3D();

            re._M11 = 1;
            re._M12 = 0;
            re._M13 = 0;
            re._M14 = 0;
            re._M21 = 0;
            re._M22 = c;
            re._M23 = s;
            re._M24 = 0;
            re._M31 = 0;
            re._M32 = -s;
            re._M33 = c;
            re._M34 = 0;
            re._OffsetX = 0;
            re._OffsetY = 0;
            re._OffsetZ = 0;
            re._M44 = 1;

            return re;
        }

        this._CreateRotationY = function (r) {
            var s = Math.sin(r);
            var c = Math.cos(r);
            var re = new Matrix3D();

            re._M11 = c;
            re._M12 = 0;
            re._M13 = -s;
            re._M14 = 0;
            re._M21 = 0;
            re._M22 = 1;
            re._M23 = 0;
            re._M24 = 0;
            re._M31 = s;
            re._M32 = 0;
            re._M33 = c;
            re._M34 = 0;
            re._OffsetX = 0;
            re._OffsetY = 0;
            re._OffsetZ = 0;
            re._M44 = 1;

            return re;
        }

        this._ApplyMatrixToMatrix = function (a, b) {
            var r = new Matrix3D();

            r._M11 = a._M11 * b._M11;
            r._M11 += a._M12 * b._M21;
            r._M11 += a._M13 * b._M31;
            r._M11 += a._M14 * b._OffsetX;
            r._M12 = a._M11 * b._M12;
            r._M12 += a._M12 * b._M22;
            r._M12 += a._M13 * b._M32;
            r._M12 += a._M14 * b._OffsetY;
            r._M13 = a._M11 * b._M13;
            r._M13 += a._M12 * b._M23;
            r._M13 += a._M13 * b._M33;
            r._M13 += a._M14 * b._OffsetZ;
            r._M14 = a._M11 * b._M14;
            r._M14 += a._M12 * b._M24;
            r._M14 += a._M13 * b._M34;
            r._M14 += a._M14 * b._M44;

            r._M21 = a._M21 * b._M11;
            r._M21 += a._M22 * b._M21;
            r._M21 += a._M23 * b._M31;
            r._M21 += a._M24 * b._OffsetX;
            r._M22 = a._M21 * b._M12;
            r._M22 += a._M22 * b._M22;
            r._M22 += a._M23 * b._M32;
            r._M22 += a._M24 * b._OffsetY;
            r._M23 = a._M21 * b._M13;
            r._M23 += a._M22 * b._M23;
            r._M23 += a._M23 * b._M33;
            r._M23 += a._M24 * b._OffsetZ;
            r._M24 = a._M21 * b._M14;
            r._M24 += a._M22 * b._M24;
            r._M24 += a._M23 * b._M34;
            r._M24 += a._M24 * b._M44;

            r._M31 = a._M31 * b._M11;
            r._M31 += a._M32 * b._M21;
            r._M31 += a._M33 * b._M31;
            r._M31 += a._M34 * b._OffsetX;
            r._M32 = a._M31 * b._M12;
            r._M32 += a._M32 * b._M22;
            r._M32 += a._M33 * b._M32;
            r._M32 += a._M34 * b._OffsetY;
            r._M33 = a._M31 * b._M13;
            r._M33 += a._M32 * b._M23;
            r._M33 += a._M33 * b._M33;
            r._M33 += a._M34 * b._OffsetZ;
            r._M34 = a._M31 * b._M14;
            r._M34 += a._M32 * b._M24;
            r._M34 += a._M33 * b._M34;
            r._M34 += a._M34 * b._M44;

            r._OffsetX = a._OffsetX * b._M11;
            r._OffsetX += a._OffsetY * b._M21;
            r._OffsetX += a._OffsetZ * b._M31;
            r._OffsetX += a._M44 * b._OffsetX;
            r._OffsetY = a._OffsetX * b._M12;
            r._OffsetY += a._OffsetY * b._M22;
            r._OffsetY += a._OffsetZ * b._M32;
            r._OffsetY += a._M44 * b._OffsetY;
            r._OffsetZ = a._OffsetX * b._M13;
            r._OffsetZ += a._OffsetY * b._M23;
            r._OffsetZ += a._OffsetZ * b._M33;
            r._OffsetZ += a._M44 * b._OffsetZ;
            r._M44 = a._OffsetX * b._M14;
            r._M44 += a._OffsetY * b._M24;
            r._M44 += a._OffsetZ * b._M34;
            r._M44 += a._M44 * b._M44;

            return r;
        }

        this._DegToRad = function (d) {
            return d * 0.0174532925199432957;
        }
    }

    //sample.js
    var cube;

    var mouseisdown = false;

    // var recipeName = '<?php echo the_field("recipe_name"); ?>'



    $(document).ready(function () {


        $('#demo').html(area1);


        let faces = new Array();


        // Faces of 3D cube, who get values from acf, the variables are ine front-page.php
        faces.push(area1);
        faces.push(area2);
        faces.push(area3);
        faces.push(area4);
        faces.push(area5);
        faces.push(area6);


        cube = new Js3DSurface("my3Dsurface", faces);

        cube._backSurface.addEventListener('mousemove', mousemove, false);
        document.body.addEventListener('mousedown', mousedown, false);
        document.body.addEventListener('mouseup', mouseup, false);

    });

    function mousedown(e) {
        mouseisdown = true;
        if (e != null) {
            e.stopPropagation();
            e.preventDefault();
        }

        return false;
    }

    function mouseup(e) {
        mouseisdown = false;
        if (e != null) {
            e.stopPropagation();
            e.preventDefault();
        }
        return false;
    }

    function mousemove(e) {
        if (mouseisdown) {
            var _off = $(cube._backSurface).offset();
            var x = e.clientX - _off.left;
            var y = e.clientY - _off.top;
            y += $(window).scrollTop();

            adjRot(x, y);
        }
    }

    function adjRot(x, y) {
        // var w = $(cube._backSurface).width();
        var w = $(cube._backSurface).width();
        var h = $(cube._backSurface).height();
        var step = 10;
        var ry = (((x - (w / 2)) / w) * step);
        var rx = (((y - (h / 2)) / h) * step);

        cube._cubes[0]._Torque._Y = ry;
        cube._cubes[0]._Torque._X = rx;
    }

}

export default portfolioCube;