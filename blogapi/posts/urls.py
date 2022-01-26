from posixpath import basename
from django.db import router
from django.template import base
from django.urls import URLPattern, path
from rest_framework.routers import SimpleRouter
from .views import  PostViewSet, UserViewSet

router = SimpleRouter()
router.register('users', UserViewSet, basename='users')
router.register('', PostViewSet, basename='posts')

URLPattern = router.urls