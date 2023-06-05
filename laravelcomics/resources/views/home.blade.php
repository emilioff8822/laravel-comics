@extends('main')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <img class="logo" src="../assets/img/jumbotron.jpg" alt="logo">
        </div>
        <div class="card-container">
            <div class="current-series">
                CURRENT SERIES
            </div>
            <Card v-for="card in cards" :key="card.thumb" :thumb="card.thumb" :price="card.price"
                :series="card.series" :type="card.type" />
            <button class="load-more">LOAD MORE</button>
        </div>
    </div>
    <script>
        import {
            cardsData
        } from "../data/menus";
        import Card from './Card.vue';

        export default {
            name: "Main",
            components: {
                Card
            },
            data() {
                return {
                    cards: cardsData
                };
            }
        };
    </script>



    <style lang="scss">
        .container {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .jumbotron {
            background-image: url('../assets/img/jumbotron.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            height: 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .card-container {
            background-color: black;
            height: 60%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
            padding-top: 50px;
            padding-right: 200px;
            padding-left: 200px;
            position: relative;
        }

        .current-series {
            position: absolute;
            top: calc(-2%);
            left: 200px;
            z-index: 1;
            background-color: rgb(17, 117, 232);
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            cursor: pointer;

            &:hover {
                background-color: rgb(31, 152, 168);
            }
        }

        .logo {
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        img.logo {
            height: 400px;
            object-fit: cover;
            width: 100%;

        }


        .card {
            flex: 0 0 calc(100% / 6 - 1rem);
            margin: 0.5rem;
            padding: 1rem;
            box-sizing: border-box;
            color: white;
            text-align: center;
        }

        .card-img-container {
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            position: relative;
            overflow: hidden;
            margin-bottom: 1rem;

            img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        .load-more {
            background-color: rgb(17, 117, 232);
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            margin-bottom: 40px;
            margin-top: 20px;
            cursor: pointer;

            &:hover {
                background-color: rgb(31, 152, 168);
            }
        }
    </style>
@endsection
