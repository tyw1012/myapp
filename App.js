import React, { Component } from 'react'
import {
    StyleSheet,
    Text,
    View
} from 'react-native';
import { StackNavigator } from 'react-navigation';
import Login from './components/Login';
import Profile from './components/Profile';

const Application = StackNavigator({
     Home : { screen : Login},
     Profile: { scren: Profile}
     }, {
      navagationOptions : {
          header: false,
      }
   });

export default class App extends React.Component{
    render() {
        return (
           <Application />
        );
    }
}
