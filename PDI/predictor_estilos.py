# -*- coding: utf-8 -*-
"""predictor_estilos.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1vgP563vTAAUrjERFDGnyaqADp9OAG9VP
"""

import pandas as pd
from sklearn.tree import DecisionTreeClassifier

datos1 = pd.read_csv('/Pesajes - Pesajes.csv')

datos1

X = datos1.drop(columns ='Altura')

y=datos1['Altura']

modelo = DecisionTreeClassifier()
modelo.fit(X,y)
prediccion = modelo.predict([[18,1]])

prediccion

modelo.fit(Edad,Genero)

Edad = int(input("Ingresar edad: "))
Genero = int(input("Ingresar genero: 0(Femenito) / 1(Masculino) "))
prediccion2 = modelo.predict([[Edad,Genero]])
prediccion2

datos1 = pd.read_csv('/Pesajes.csv')